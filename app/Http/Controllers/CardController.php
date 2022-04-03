<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\AdminMail;
use Dropbox\WriteMode;
use Storage;
use Illuminate\Support\Facades\Auth;
class CardController extends Controller
{
     public function index()
     {
         return view('layouts.quote-card');
     }
   //show on table
   public function showlist()
   {

       $logo=Card::orderBy('id', 'ASC')->get();
       return view('Dashboard.cardList',compact('logo'));

   }
    //Show package profile
    public function showcard($id)
    {
       $user= Auth::check();

        if($user==true)
        {
             $customid=Card::where('id',$id)->first();
           return view('Dashboard.card',compact('customid'));
        }else
        {
            return redirect('/');
        }

    }
 //delete file
 public function  removeFiles(Request $request,$id)
{
$token = $this->getShortToken(); // oauth token
 $parameters = array('path' =>'/'.$id);
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
$profile=Card::findOrFail($id);
$profile->delete();
return redirect('/show-list');

}
    //insert data
     public function store(Request $request)
     {
        //  dd($request->all());
          $formdata= new Card;
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
          $formdata->card=$request->card;
          $formdata->productShortDesc=$request->productShortDesc;
          $formdata->sizeformat=$request->sizeformat;
          $formdata->picOfPackage=$request->picOfPackage;
        //   $formdata->picOfPackage_file=$request->picOfPackage_file;
          $formdata->inspiration=$request->inspiration;
        //   $formdata->inspiration_file=$request->inspiration_file;
          $formdata->logo=$request->logo;
        //   $formdata->logo_file=$request->logo_file;
          $formdata->attachLogo=$request->attachLogo;
        //   $formdata->attachLogo_file=$request->attachLogo_file;
          $formdata->buyer=$request->buyer;
          $formdata->brand=$request->brand;
          $formdata->instruct=$request->instruct;
          $formdata->bought=$request->bought;
          $formdata->advertise=$request->advertise;
          $formdata->card_design=$request->card_design;
        //   $formdata->card_design_file=$request->card_design_file;
          $formdata->palette=$request->palette;
        //   $formdata->palette_file=$request->palette_file;
          $formdata->fonts=$request->fonts;
        //   $formdata->fonts_file=$request->fonts_file;
          $formdata->resolution=$request->resolution;
        //   $formdata->resolution_file=$request->resolution_file;
          $formdata->includeWebsite=$request->includeWebsite;
          $formdata->luxury=$request->luxury;
          $formdata->minimalist=$request->minimalist;
          $formdata->playful=$request->playful;
          $formdata->feminine=$request->feminine;
          $formdata->casual=$request->casual;
          $formdata->detailed=$request->detailed;
          $formdata->serious=$request->serious;
          $formdata->masculine=$request->masculine;
          $formdata->audience=$request->audience;
          $formdata->webUrl=$request->webUrl;
          $formdata->avoid=$request->avoid;
          $formdata->additionalComment=$request->additionalComment;
          $formdata->save();

          // Mail::to('support@studiopixelnuts.com')->send(new SendMail($formdata)); // sending email to the admin

        // $admindata=array(
        //     'email'=>'Usama_1s@hotmail.com',
        //     'id'=>$formdata->id,
        // );
        // Mail::to($request->email)->send(new AdminMail($admindata)); // sending email to the user

          $token = $this->getShortToken(); // oauth token
          $image_links=array();
          $inspiration=array();
          $logofile=array();
          $attachLogo=array();
          $carddesign=array();
          $palettefile=array();
          $fontsfile=array();
          $resolutionfile=array();
          //first loop
            if (isset($request->picOfPackage_file)) {
            foreach ($request->picOfPackage_file as $picOfPackage_file) {
                $tmp_name=$picOfPackage_file->getPathname();
                $type=$picOfPackage_file->getMimeType();
                $extension=$picOfPackage_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$picOfPackage_file->getSize();
                $error=$picOfPackage_file->getError();
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($image_links, $link);
                // header('Content-Type: application/json');
            }
        }

        //second loop
         if (isset($request->inspiration_file)) {
            foreach ($request->inspiration_file as $inspiration_file) {
                $tmp_name=$inspiration_file->getPathname();
                $type=$inspiration_file->getMimeType();
                $extension=$inspiration_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$inspiration_file->getSize();
                $error=$inspiration_file->getError();
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($inspiration, $link);
                // header('Content-Type: application/json');
            }
        }
        //3rd loop
         if (isset($request->logo_file)) {
            foreach ($request->logo_file as $logo_file) {
                $tmp_name=$logo_file->getPathname();
                $type=$logo_file->getMimeType();
                $extension=$logo_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$logo_file->getSize();
                $error=$logo_file->getError();
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($logofile, $link);
                // header('Content-Type: application/json');
            }
        }
        //4th loop
     if (isset($request->attachLogo_file)) {
            foreach ($request->attachLogo_file as $attachLogo_file) {
                $tmp_name=$attachLogo_file->getPathname();
                $type=$attachLogo_file->getMimeType();
                $extension=$attachLogo_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$attachLogo_file->getSize();
                $error=$attachLogo_file->getError();
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($attachLogo, $link);
                // header('Content-Type: application/json');
            }
        }
        //5th loop
  if (isset($request->card_design_file)) {
            foreach ($request->card_design_file as $card_design_file) {
                $tmp_name=$card_design_file->getPathname();
                $type=$card_design_file->getMimeType();
                $extension=$card_design_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$card_design_file->getSize();
                $error=$card_design_file->getError();
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($carddesign, $link);
                // header('Content-Type: application/json');
            }
        }
        //6th loop
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($palettefile, $link);
                // header('Content-Type: application/json');
            }
        }
        //7th loop
        if (isset($request->fonts_file)) {
            foreach ($request->fonts_file as $fonts_file) {
                $tmp_name=$fonts_file->getPathname();
                $type=$fonts_file->getMimeType();
                $extension=$fonts_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$fonts_file->getSize();
                $error=$fonts_file->getError();
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($fontsfile, $link);
                // header('Content-Type: application/json');
            }
        }

        //8th loop
        if (isset($request->resolution_file)) {
            foreach ($request->resolution_file as $resolution_file) {
                $tmp_name=$resolution_file->getPathname();
                $type=$resolution_file->getMimeType();
                $extension=$resolution_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$resolution_file->getSize();
                $error=$resolution_file->getError();
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
                              "path" =>"/Logo/$formdata->id/" . $image_name,
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
   "path" => "/Logo/$formdata->id/". $image_name
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

                array_push($resolutionfile, $link);
                // header('Content-Type: application/json');
            }
        }
        //end loop
        $update=Card::where('id', $formdata->id)->first();
        $update->picOfPackage_file=$image_links;
        $update->inspiration_file=$inspiration;
        $update->logo_file=$logofile;
        $update->attachLogo_file=$attachLogo;
        $update->card_design_file=$carddesign;
        $update->palette_file=$palettefile;
        $update->fonts_file=$fontsfile;
        $update->resolution_file=$resolutionfile;
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