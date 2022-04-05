<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\AdminMail;
use Dropbox\WriteMode;
use Storage;
use Illuminate\Support\Facades\Auth;
class ListingControlller extends Controller
{
    // index
    public function index()
    {
        return view('layouts.quote-listing');
    }
     //show on table
    public function showlist()
   {

       $logo=Listing::orderBy('id', 'ASC')->get();
       return view('Dashboard.list',compact('logo'));

   }
    //Show package Listing
    public function  showListing($id)
    {
       $user= Auth::check();

        if($user==true)
        {
             $customid=Listing::where('id',$id)->first();
           return view('Dashboard.listing',compact('customid'));
        }else
        {
            return redirect('/');
        }

    }
//delete
  public function  removeFiles(Request $request,$id)
{

 $token = $this->getShortToken(); // oauth token
 $parameters = array('path' =>'/Listing/'.$id);
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
$profile=Listing::findOrFail($id);
$profile->delete();
return redirect('/show-listing');

}

   //insert data

public function store(Request $request)
{

        $formdata= new Listing;
        $formdata->fname=$request->fname;
        $formdata->surname=$request->surname;
        $formdata->hearaboutservices=$request->hearaboutservices;
        $formdata->payment=$request->payment;
        $formdata->companyname=$request->companyname;
        $formdata->address=$request->address;
        $formdata->country=$request->country;
        $formdata->city=$request->city;
        $formdata->zipcode=$request->zipcode;
        $formdata->email=$request->email;
        $formdata->photos=$request->photos;
        //  $formdata->photos_file=$request->photos_file;
        $formdata->main=$request->main;
        //  $formdata->main_file=$request->main_file;
        $formdata->competitor=$request->competitor;
        // $formdata->competitor_file=$request->competitor_file;
        $formdata->images=$request->images;
         $formdata->stock=$request->stock;
        $formdata->sketch=$request->sketch;
        // $formdata->sketch_file=$request->sketch_file;
        $formdata->timage=$request->timage;
        $formdata->stock_image=$request->stock_image;
        $formdata->design=$request->design;
        // $formdata->design_file=$request->design_file;
        $formdata->text_image=$request->text_image;
        $formdata->provide_image=$request->provide_image;
        $formdata->reference=$request->reference;
        // $formdata->reference_file=$request->reference_file;
        $formdata->audi_image=$request->audi_image;
        $formdata->link_image=$request->link_image;
        $formdata->logo_image=$request->logo_image;
        // $formdata->logo_image_file=$request->logo_image_file;
        $formdata->be_image=$request->be_image;
        $formdata->any_image=$request->any_image;
        $formdata->or_image=$request->or_image;
        // $formdata->or_image_file=$request->or_image_file;
        $formdata->image_tg=$request->image_tg;
        $formdata->likeimage=$request->likeimage;
        $formdata->infographics=$request->infographics;
        // $formdata->infographics_file=$request->infographics_file;
        $formdata->vector=$request->vector;
        // $formdata->vector_file=$request->vector_file;
        $formdata->palette=$request->palette;
        //  $formdata->palette_file=$request->palette_file;
        $formdata->info=$request->info;
        //  $formdata->info_file=$request->info_file;
        $formdata->target_image=$request->target_image;
         $formdata->guidei=$request->guidei;
        // $formdata->guidei_file=$request->guidei_file;
        $formdata->webUrl=$request->webUrl;
        $formdata->topcompetitor=$request->topcompetitor;
         $formdata->avoid=$request->avoid;
        $formdata->additionalComment=$request->additionalComment;
        $formdata->save();
        // Mail::to('support@studiopixelnuts.com')->send(new SendMail($formdata)); // sending email to the admin

        // $admindata=array(
        //     'email'=>'Usama_1s@hotmail.com',
        //     'id'=>$formdata->id,
        // );
        // Mail::to($request->email)->send(new AdminMail($admindata)); // sending email to the user
        //  $token = 'sl.BFJ54ixAf581bT9hZN_uaHU6iy9UZB_LO2I3s4KoufSHrcdjO0O9FIcoeScA2KXrFKdvpplBrVtsYjysWF9Cg4oj_3ChVwgnQ4xk2bVz_3UJ0P9xsJ109m1Jg06UqZU6WVAaGuowkO55'; // oauth token
        $token = $this->getShortToken(); // oauth token
        $photosfile=array();
        $mainfile=array();
        $competfile=array();
        $desigile=array();
       $sketcile=array();
       $referfile=array();
       $logkfile=array();
       $oimagefile=array();
       $infogfile=array();
       $vecfile=array();
       $paletfile=array();
       $infoil=array();
       $guideifile=array();
         if (isset($request->photos_file)) {
            foreach ($request->photos_file as $photos_file) {
                $tmp_name=$photos_file->getPathname();
                $type=$photos_file->getMimeType();
                $extension=$photos_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$photos_file->getSize();
                $error=$photos_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($photosfile, $link);
                // header('Content-Type: application/json');
            }
        }

       // 2nd loop
              if (isset($request->main_file)) {
            foreach ($request->main_file as $main_file) {
                $tmp_name=$main_file->getPathname();
                $type=$main_file->getMimeType();
                $extension=$main_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$main_file->getSize();
                $error=$main_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($mainfile, $link);
                // header('Content-Type: application/json');
            }
        }
       // 3rd loop
              if (isset($request->competitor_file)) {
            foreach ($request->competitor_file as $competitor_file) {
                $tmp_name=$competitor_file->getPathname();
                $type=$competitor_file->getMimeType();
                $extension=$competitor_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$competitor_file->getSize();
                $error=$competitor_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($competfile, $link);
                // header('Content-Type: application/json');
            }
        }
        //4th loop
            if (isset($request->sketch_file)) {
            foreach ($request->sketch_file as $sketch_file) {
                $tmp_name=$sketch_file->getPathname();
                $type=$sketch_file->getMimeType();
                $extension=$sketch_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$sketch_file->getSize();
                $error=$sketch_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($sketcile, $link);
                // header('Content-Type: application/json');
            }
        }

        //5th loop

                if (isset($request->design_file)) {
            foreach ($request->design_file as $design_file) {
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($desigile, $link);
                // header('Content-Type: application/json');
            }
        }
       //6th loop

             if (isset($request->reference_file)) {
            foreach ($request->reference_file as $reference_file) {
                $tmp_name=$reference_file->getPathname();
                $type=$reference_file->getMimeType();
                $extension=$reference_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$reference_file->getSize();
                $error=$reference_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($referfile, $link);
                // header('Content-Type: application/json');
            }
        }
        //7th loop

         if (isset($request->logo_image_file)) {
            foreach ($request->logo_image_file as $logo_image_file) {
                $tmp_name=$logo_image_file->getPathname();
                $type=$logo_image_file->getMimeType();
                $extension=$reference_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$logo_image_file->getSize();
                $error=$logo_image_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($logkfile, $link);
                // header('Content-Type: application/json');
            }
        }
        //8th loop


         if (isset($request->or_image_file)) {
            foreach ($request->or_image_file as $or_image_file) {
                $tmp_name=$or_image_file->getPathname();
                $type=$or_image_file->getMimeType();
                $extension=$reference_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$or_image_file->getSize();
                $error=$or_image_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($oimagefile, $link);
                // header('Content-Type: application/json');
            }
        }
        //9th loop
          if (isset($request->infographics_file)) {
            foreach ($request->infographics_file as $infographics_file) {
                $tmp_name=$infographics_file->getPathname();
                $type=$infographics_file->getMimeType();
                $extension=$infographics_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$infographics_file->getSize();
                $error=$infographics_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($infogfile, $link);
                // header('Content-Type: application/json');
            }
        }
       // loop  10th

         if (isset($request->vector_file)) {
            foreach ($request->vector_file as $vector_file) {
                $tmp_name=$vector_file->getPathname();
                $type=$vector_file->getMimeType();
                $extension=$vector_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$vector_file->getSize();
                $error=$vector_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($vecfile, $link);
                // header('Content-Type: application/json');
            }
        }
     //11th loop

         if (isset($request->palette_file)) {
            foreach ($request->palette_file as $palette_file) {
                $tmp_name=$palette_file->getPathname();
                $type=$palette_file->getMimeType();
                $extension=$palette_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$palette_file->getSize();
                $error=$palette_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($paletfile, $link);
                // header('Content-Type: application/json');
            }
        }
       //12th loop

         if (isset($request->info_file)) {
            foreach ($request->info_file as $info_file) {
                $tmp_name=$info_file->getPathname();
                $type=$info_file->getMimeType();
                $extension=$info_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$info_file->getSize();
                $error=$info_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($infoil, $link);
                // header('Content-Type: application/json');
            }
        }
        //13 loop
         if (isset($request->guidei_file)) {
            foreach ($request->guidei_file as $guidei_file) {
                $tmp_name=$guidei_file->getPathname();
                $type=$guidei_file->getMimeType();
                $extension=$guidei_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$guidei_file->getSize();
                $error=$guidei_file->getError();
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
                              "path" =>"/Listing/$formdata->id/" . $image_name,
                              "mode" => "add",
                              "autorename" => true,
                              "mute" => false,
                              "strict_conflict" => false
                          )
                  ),
                  // 'Content-Type: application/octet-stream'
              );
                $ch = curl_init($api_url);    //initialize a new session and return a cURL handle.

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //The curl_setopt() function will set options for a CURL session identified by the ch parameter
                // CURLOPT_HTTPHEADER Pass a pointer to a linked list of HTTP headers to pass to the server
                curl_setopt($ch, CURLOPT_POST, true);
                //CURLOPT_POST. true to do a regular HTTP POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.

                $path = $tmp_name;
                $fp = fopen($path, 'rb');
                //The fopen() function in PHP is an inbuilt function which is used to open a file or an URL
                $filesize = filesize($path);


                curl_setopt($ch, CURLOPT_POSTFIELDS, fread($fp, $filesize));
                //CURLOPT_POSTFIELDS. The full data to post in a HTTP "POST"
                //fread is a function that reads buffered binary input from a file.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //CURLOPT_RETURNTRANSFER. true to return the transfer as a string of the return value of curl_exec() instead of outputting it directly.
              curl_setopt($ch, CURLOPT_VERBOSE, 1); // debug
             //CURLOPT_VERBOSE. true to output verbose information. Writes output to STDERR , or the file specified using CURLOPT_STDERR .
              $response = curl_exec($ch);
                //curl_exec execute the given cURL session.
                // dd($response);

                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                curl_close($ch);
                $api_url_s = "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings";
                $headers_s = array('Authorization: Bearer ' . $token,
   'Content-Type: application/json');

                // $path = 'Companies/' . $company->company_name . '/' . $newfilename;

                $post_data=json_encode(
                    array(
   "path" => "/Listing/$formdata->id/". $image_name
   ),
                );
                // dd($post_data);


                $ch_s = curl_init($api_url_s);
                // dd($ch_s);
                // dd($headers_s);
                curl_setopt($ch_s, CURLOPT_HTTPHEADER, $headers_s);
                curl_setopt($ch_s, CURLOPT_POSTFIELDS, $post_data);
                curl_setopt($ch_s, CURLOPT_POST, true);
                curl_setopt($ch_s, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch_s, CURLOPT_VERBOSE, 1);
                //CURLOPT_VERBOSE. true to output verbose information.
                $response_s = curl_exec($ch_s);
                // dd($response_s);
                $http_code_s = curl_getinfo($ch_s, CURLINFO_HTTP_CODE);

                curl_close($ch_s);

                $r = json_decode($response_s, true);
                // dd($r);
                $link = $r['url'];
                $link = substr($link, 0, -4)."dl=1";

                array_push($guideifile, $link);
                // header('Content-Type: application/json');
            }
        }

        //end loop
        $update=Listing::where('id', $formdata->id)->first();
        $update->photos_file=$photosfile;
        $update->main_file=$mainfile;
        $update->competitor_file=$competfile;
        $update->sketch_file=$sketcile;
        $update->design_file=$desigile;
        $update->reference_file=$referfile;
        $update->logo_image_file=$logkfile;
        $update->or_image_file=$oimagefile;
        $update->infographics_file=$infogfile;
        $update->vector_file=$vecfile;
        $update->palette_file=$paletfile;
        $update->info_file=$infoil;
        $update->guidei_file=$guideifile;
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