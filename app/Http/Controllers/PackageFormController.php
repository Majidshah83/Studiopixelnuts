<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Package;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;
// use Spatie\Dropbox\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\AdminMail;
use Dropbox\WriteMode;
use Storage;
use Illuminate\Support\Facades\Auth;
class PackageFormController extends Controller
{
     public function index()
   {
       return view('layouts.quote-package');
   }
   //show on table
    public function showlist()
   {

       $logo=Package::orderBy('id', 'ASC')->get();
       return view('Dashboard.packageList',compact('logo'));

   }
   //Show package profile
    public function showpackage($id)
    {
       $user= Auth::check();

        if($user==true)
        {
             $customid=Package::where('id',$id)->first();
           return view('Dashboard.package',compact('customid'));
        }else
        {
            return redirect('/');
        }

    }
//delete file
 public function  removeFiles(Request $request,$id)
{
 $token = $this->getShortToken(); // oauth token
 $parameters = array('path' =>'/Package/'.$id);
$headers = array('Authorization: Bearer'.$token ,'Content-Type: application/json');
$curlOptions = array(
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($parameters),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_VERBOSE => true
    );

$ch = curl_init('https://api.dropboxapi.com/2/files/delete_v2');
curl_setopt_array($ch, $curlOptions);

$response = curl_exec($ch);
// echo $response;
curl_close($ch);
$profile=Package::findOrFail($id);
$profile->delete();
return redirect('/customer-package');

}
// insert data
   public function store(Request $request)
   {
        $data = array(
            'email'      =>  $request->email,

        );
        $formdata= new Package;
        $formdata->fname=$request->fname;
        $formdata->surname=$request->surname;
        $formdata->hearaboutservices=$request->hearaboutservices;
        $formdata->payment=$request->payment;
        $formdata->companyname=$request->companyname;
        $formdata->address=$request->address;
        $formdata->city=$request->city;
        $formdata->country=$request->country;
        $formdata->zipcode=$request->zipcode;
        $formdata->email=$request->email;
        $formdata->productName=$request->productName;
        $formdata->productShortDesc=$request->productShortDesc;
        $formdata->typeOfPackage=$request->typeOfPackage;
        $formdata->picOfPackage=$request->picOfPackage;
        // $Package->picOfPackagefile=$request->picOfPackagefile;
        // $Package->sizeOfPackagingfile=$request->sizeOfPackagingfile;
        $formdata->sizeOfPackagingimg=$request->sizeOfPackagingimg;
        $formdata->attachPackageDesign=$request->attachPackageDesign;
        // $Package->attachPackageDesignimgfile=$request->attachPackageDesignimgfile;
        $formdata->attachLogo=$request->attachLogo;
        // $Package->attachLogofile=$request->attachLogofile;
        $formdata->packageText=$request->packageText;
        // $Package->packageTextfile=$request->packageTextfile;
        $formdata->attachPackageimages=$request->attachPackageimages;
        // $Package->attachPackagefile=$request->attachPackagefile;
        $formdata->colorPackage=$request->colorPackage;
        // $Package->colorPackagefile=$request->colorPackagefile;
        $formdata->fontPackage=$request->fontPackage;
        // $Package->fontPackagefile=$request->fontPackagefile;
        $formdata->includeWebsite=$request->includeWebsite;
        $formdata->barcode=$request->barcode;
        // $Package->barcodefile=$request->barcodefile;
        $formdata->productManufacture=$request->productManufacture;
        $formdata->certificationsORwarning=$request->certificationsORwarning;
        // $Package->certificationsORwarninfile=$request->certificationsORwarninfile;
        $formdata->classic=$request->classic;
        $formdata->mature=$request->mature;
        $formdata->playful=$request->playful;
        $formdata->feminine=$request->feminine;
        $formdata->sensible=$request->sensible;
        $formdata->modern=$request->modern;
        $formdata->youthful=$request->youthful;
        $formdata->serious=$request->serious;
        $formdata->masculine=$request->masculine;
        $formdata->luxurious=$request->luxurious;
        $formdata->tgAudienece=$request->tgAudienece;
        $formdata->webUrl=$request->webUrl;
        $formdata->avoid=$request->avoid;
        $formdata->additionalComment=$request->additionalComment;
        $formdata->save();
        Mail::to('support@studiopixelnuts.com')->send(new SendMail($formdata)); // sending email to the admin

        $admindata=array(
            'email'=>'Usama_1s@hotmail.com',
            'id'=>$formdata->id,
        );
        Mail::to($request->email)->send(new AdminMail($admindata)); // sending email to the user
$picfont=array();
$sizesarry=array();
$attachDesiging=array();
$slogof=array();
$file_package=array();
$attach_Package_file=array();
$color_file=array();
$font_ffile=array();
$bar_code=array();
$certificate_file=array();
$token = $this->getShortToken(); // oauth token
//   $token='sl.BFJ54ixAf581bT9hZN_uaHU6iy9UZB_LO2I3s4KoufSHrcdjO0O9FIcoeScA2KXrFKdvpplBrVtsYjysWF9Cg4oj_3ChVwgnQ4xk2bVz_3UJ0P9xsJ109m1Jg06UqZU6WVAaGuowkO55';
//first loop
// dd($request->picOfPackagefile);

if(isset($request->pic_file)){
foreach($request->pic_file as $pic_file)
    {
        // dd($picOfPackagefiles);
        $tmp_name=$pic_file->getPathname();
        $type=$pic_file->getMimeType();
        $extension=$pic_file->getClientOriginalName();
        $image_name=time().$extension;
        $size=$pic_file->getSize();
        $error=$pic_file->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($picfont,$link);
   // header('Content-Type: application/json');

 }
 }

 //2nd loop
  if(isset($request->size_file)){
foreach($request->size_file as $size_file)
    {
        // dd($picOfPackagefiles);
        $tmp_name=$size_file->getPathname();
        $type=$size_file->getMimeType();
        $extension=$size_file->getClientOriginalName();
        $image_name=time().$extension;
        $size=$size_file->getSize();
        $error=$size_file->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($sizesarry,$link);
   // header('Content-Type: application/json');

 }
 }
 //3rdloop
 if(isset($request->design_file)){
foreach($request->design_file as $design_file)
    {
        // dd($picOfPackagefiles);
        $tmp_name=$design_file->getPathname();
        $type=$design_file->getMimeType();
        $extension=$design_file->getClientOriginalName();
        $image_name=time().$extension;
        $size=$design_file->getSize();
        $error=$design_file->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($attachDesiging,$link);
   // header('Content-Type: application/json');

 }
 }
 //4th loop
 if(isset($request->slogofiles)){
foreach($request->slogofiles as $slogofiles)
    {
        $tmp_name=$slogofiles->getPathname();
        $type=$slogofiles->getMimeType();
        $extension=$slogofiles->getClientOriginalName();
        $image_name=time().$extension;
        $size=$slogofiles->getSize();
        $error=$slogofiles->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($slogof,$link);
   // header('Content-Type: application/json');

 }
 }
 //5th loop
 if(isset($request->packageTextfile)){
foreach($request->packageTextfile as $packageTextfiles)
    {
        $tmp_name=$packageTextfiles->getPathname();
        $type=$packageTextfiles->getMimeType();
        $extension=$packageTextfiles->getClientOriginalName();
        $image_name=time().$extension;
        $size=$packageTextfiles->getSize();
        $error=$packageTextfiles->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($file_package,$link);
   // header('Content-Type: application/json');

 }
 }

 //6th
  if(isset($request->attachPackagefile)){
foreach($request->attachPackagefile as $attachPackagefiles)
    {
        $tmp_name=$attachPackagefiles->getPathname();
        $type=$attachPackagefiles->getMimeType();
        $extension=$attachPackagefiles->getClientOriginalName();
        $image_name=time().$extension;
        $size=$attachPackagefiles->getSize();
        $error=$attachPackagefiles->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($attach_Package_file,$link);
   // header('Content-Type: application/json');

 }
 }
 //7th looop
  if(isset($request->colorPackagefile)){
foreach($request->colorPackagefile as $colorPackagefiles)
    {
        $tmp_name=$colorPackagefiles->getPathname();
        $type=$colorPackagefiles->getMimeType();
        $extension=$colorPackagefiles->getClientOriginalName();
        $image_name=time().$extension;
        $size=$colorPackagefiles->getSize();
        $error=$colorPackagefiles->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($color_file,$link);
   // header('Content-Type: application/json');

 }
 }

 //8th loop
 if(isset($request->fontPackagefile)){
foreach($request->fontPackagefile as $fontPackagefiles)
    {
        $tmp_name=$fontPackagefiles->getPathname();
        $type=$fontPackagefiles->getMimeType();
        $extension=$fontPackagefiles->getClientOriginalName();
        $image_name=time().$extension;
        $size=$fontPackagefiles->getSize();
        $error=$fontPackagefiles->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($font_ffile,$link);
   // header('Content-Type: application/json');

 }
 }

 //9th loop
 if(isset($request->barcodefile)){
foreach($request->barcodefile as $barcodefiles)
    {
        $tmp_name=$barcodefiles->getPathname();
        $type=$barcodefiles->getMimeType();
        $extension=$barcodefiles->getClientOriginalName();
        $image_name=time().$extension;
        $size=$barcodefiles->getSize();
        $error=$barcodefiles->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($bar_code,$link);
   // header('Content-Type: application/json');

 }
 }
//10th loop
if(isset($request->certificationsORwarninfile)){
foreach($request->certificationsORwarninfile as $certificationsORwarninfiles)
    {
        $tmp_name=$certificationsORwarninfiles->getPathname();
        $type=$certificationsORwarninfiles->getMimeType();
        $extension=$certificationsORwarninfiles->getClientOriginalName();
        $image_name=time().$extension;
        $size=$certificationsORwarninfiles->getSize();
        $error=$certificationsORwarninfiles->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;


              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/Package/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
               $ch = curl_init($api_url);

              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_POST, true);

              $path = $tmp_name;
              $fp = fopen($path, 'rb');
              $filesize = filesize($path);


              curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug

              $response = curl_exec($ch);
              // dd($response);

              $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

              curl_close($ch);
              $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
   $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

   // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

   $post_data=json_encode(array(
   "path" => "/Package/$formdata->id/". $image_name
   ),

   );
   // dd($post_data);


   $ch_s = curl_init($api_url_s);
   // dd($ch_s);
   // dd($headers_s);
   curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
   curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data );
   curl_setopt($ch_s, CURLOPT_POST, true);
   curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch_s, CURLOPT_VERBOSE, 1);

   $response_s = curl_exec($ch_s);
   // dd($response_s);
   $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

   curl_close($ch_s);

   $r = json_decode($response_s,true);
   // dd($r);
   $link = $r['url'];
   $link = substr($link, 0, -4)."dl=1";

   array_push($certificate_file,$link);
   // header('Content-Type: application/json');

 }
 }
$update=Package::where('id', $formdata->id)->first();
        $update->pic_file=$picfont;
        $update->size_file=$sizesarry;
         $update->design_file=$attachDesiging;
         $update->slogofiles=$slogof;
         $update->packageTextfile=$file_package;
         $update->attachPackagefile=$attach_Package_file;
         $update->colorPackagefile=$color_file;
         $update->fontPackagefile=$font_ffile;
         $update->barcodefile=$bar_code;
         $update->certificationsORwarninfile=$certificate_file;
        $update->save();
        return back()->with('message', 'done');

}
public function getShortToken()
    {
        $refresh = 'a6ClnhCy1ZIAAAAAAAAAAYjVzAmTmHp3u2U8qKhJ9upioOsNl9lXz31KfJhH5KPi';


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.dropbox.com/oauth2/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=refresh_token&refresh_token=$refresh");
        curl_setopt($ch, CURLOPT_USERPWD, '3e214n7reg5lqig' . ':' . 'ol40x97izoh4n8u');

        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = json_decode(curl_exec($ch));
        if (curl_errno($ch)) {
            return 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result->access_token;
    }

}