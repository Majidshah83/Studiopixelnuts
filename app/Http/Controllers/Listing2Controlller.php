<?php

namespace App\Http\Controllers;
use App\Models\Listing2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\AdminMail;
use Dropbox\WriteMode;
use Storage;
use Illuminate\Support\Facades\Auth;

class Listing2Controlller extends Controller
{
    //index page
    public function index()
    {

        return view('layouts.quote-listing2');
    }
      //show on table
    public function showlist()
   {

       $logo=Listing2::orderBy('id', 'ASC')->get();
       return view('Dashboard.list2',compact('logo'));

   }
    //Show package Listing
    public function  showListing($id)
    {
       $user= Auth::check();

        if($user==true)
        {
             $customid=Listing2::where('id',$id)->first();
           return view('Dashboard.listing2',compact('customid'));
        }else
        {
            return redirect('/');
        }

    }
    //delete file
 public function  removeFiles(Request $request,$id)
{

$token = $this->getShortToken(); // oauth token
 $parameters = array('path' =>'/Listing2/'.$id);
$headers = array('Authorization: Bearer'.$token,'Content-Type: application/json');
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
$profile=Listing2::findOrFail($id);
$profile->delete();
return redirect('/show-listing2');

}
    //insert data
    public function store(Request $request)
    {
        // dd($request->all());
        $formdata= new Listing2;
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
        $formdata->photo=$request->photo;
        // $formdata->photo_file=$request->photo_file;
        $formdata->tgAudienece=$request->tgAudienece;
        $formdata->benefit=$request->benefit;
        // $formdata->benefit_file=$request->benefit_file;
        $formdata->manual=$request->manual;
        // $formdata->manual_file=$request->manual_file;
        $formdata->unique=$request->unique;
        $formdata->giftable=$request->giftable;
        $formdata->ready=$request->ready;
        // $formdata->ready_file=$request->ready_file;
        $formdata->product=$request->product;
        // $formdata->product_file=$request->product_file;
        $formdata->currently=$request->currently;
        $formdata->under=$request->under;
        $formdata->luxury=$request->luxury;
        $formdata->expensive=$request->expensive;
        $formdata->playful=$request->playful;
        $formdata->feminine=$request->feminine;
        $formdata->casual=$request->casual;
        $formdata->economic=$request->economic;
        $formdata->serious=$request->serious;
        $formdata->masculine=$request->masculine;
        $formdata->comparison=$request->comparison;
        $formdata->high=$request->high;
        // $formdata->high_file=$request->high_file;
        $formdata->specific=$request->specific;
        // $formdata->specific_file=$request->specific_file;
        $formdata->targete=$request->targete;
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
        //  $token = 'sl.BFMk9pzRx3T2CQ5HOeVlbw0CAkQa5ilYGaXkwBgM27Up74sYmY0bFgXIZFd3e5CIW0TcqY-LofdD3TI5l-pDF_uw7VJwOAvg3jPFEs7HEaswuKm8QtCYErESw4hoozk9JM9ZIkEqGWwf'; // oauth token
         $token = $this->getShortToken(); // oauth token
        $photoile=array();
        $benefitile=array();
        $manuafil=array();
        $readfile=array();
        $productfile=array();
        $highfile=array();
        $specififile=array();
        //first loop
         if (isset($request->photo_file)) {
            //  dd($request->photo_file);
            foreach ($request->photo_file as $photo_file) {
                // dd($photo_file);
                $tmp_name=$photo_file->getPathname();
                $type=$photo_file->getMimeType();
                $extension=$photo_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$photo_file->getSize();
                $error=$photo_file->getError();
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
                              "path" =>"/Listing2/$formdata->id/" . $image_name,
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
   "path" => "/Listing2/$formdata->id/". $image_name
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

                array_push($photoile, $link);
                // header('Content-Type: application/json');
            }
        }

        //2nd loop
        if (isset($request->benefit_file)) {
            //  dd($request->photo_file);
            foreach ($request->benefit_file as $benefit_file) {
                // dd($photo_file);
                $tmp_name=$benefit_file->getPathname();
                $type=$benefit_file->getMimeType();
                $extension=$benefit_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$benefit_file->getSize();
                $error=$benefit_file->getError();
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
                              "path" =>"/Listing2/$formdata->id/" . $image_name,
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
   "path" => "/Listing2/$formdata->id/". $image_name
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

                array_push($benefitile, $link);
                // header('Content-Type: application/json');
            }
        }
        //3rd loop
         if (isset($request->manual_file)) {
            //  dd($request->photo_file);
            foreach ($request->manual_file as $manual_file) {
                // dd($photo_file);
                $tmp_name=$manual_file->getPathname();
                $type=$manual_file->getMimeType();
                $extension=$manual_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$manual_file->getSize();
                $error=$manual_file->getError();
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
                              "path" =>"/Listing2/$formdata->id/" . $image_name,
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
   "path" => "/Listing2/$formdata->id/". $image_name
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

                array_push($manuafil, $link);
                // header('Content-Type: application/json');
            }
        }
        //4th loop
        if (isset($request->ready_file)) {
            //  dd($request->photo_file);
            foreach ($request->ready_file as $ready_file) {
                // dd($photo_file);
                $tmp_name=$ready_file->getPathname();
                $type=$ready_file->getMimeType();
                $extension=$ready_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$ready_file->getSize();
                $error=$ready_file->getError();
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
                              "path" =>"/Listing2/$formdata->id/" . $image_name,
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
   "path" => "/Listing2/$formdata->id/". $image_name
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

                array_push($readfile, $link);
                // header('Content-Type: application/json');
            }
        }
        //5th loop
        if (isset($request->product_file)) {
            //  dd($request->photo_file);
            foreach ($request->product_file as $product_file) {
                // dd($photo_file);
                $tmp_name=$product_file->getPathname();
                $type=$product_file->getMimeType();
                $extension=$product_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$product_file->getSize();
                $error=$product_file->getError();
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
                              "path" =>"/Listing2/$formdata->id/" . $image_name,
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
   "path" => "/Listing2/$formdata->id/". $image_name
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

                array_push($productfile, $link);
                // header('Content-Type: application/json');
            }
        }
        //6th loop

        if (isset($request->high_file)) {
            //  dd($request->photo_file);
            foreach ($request->high_file as $high_file) {
                // dd($photo_file);
                $tmp_name=$high_file->getPathname();
                $type=$high_file->getMimeType();
                $extension=$high_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$high_file->getSize();
                $error=$high_file->getError();
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
                              "path" =>"/Listing2/$formdata->id/" . $image_name,
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
   "path" => "/Listing2/$formdata->id/". $image_name
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

                array_push($highfile, $link);
                // header('Content-Type: application/json');
            }
        }
        //7th loop
          if (isset($request->specific_file)) {
            //  dd($request->photo_file);
            foreach ($request->specific_file as $specific_file) {
                // dd($photo_file);
                $tmp_name=$specific_file->getPathname();
                $type=$specific_file->getMimeType();
                $extension=$specific_file->getClientOriginalName();
                $image_name=time().$extension;
                $size=$specific_file->getSize();
                $error=$specific_file->getError();
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
                              "path" =>"/Listing2/$formdata->id/" . $image_name,
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
   "path" => "/Listing2/$formdata->id/". $image_name
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

                array_push($specififile, $link);
                // header('Content-Type: application/json');
            }
        }
        //end loop


        $update=Listing2::where('id', $formdata->id)->first();
        $update->photo_file=$photoile;
        $update->benefit_file=$benefitile;
        $update->manual_file=$manuafil;
        $update->ready_file=$readfile;
         $update->product_file=$productfile;
         $update->high_file=$highfile;
         $update->specific_file=$specififile;
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