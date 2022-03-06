<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;
// use Spatie\Dropbox\Client;
use Dropbox\WriteMode;
use Storage;

class FormController extends Controller
{

    public function index()
    {
        return view('layouts.quote-logo');
    }


    public function store(Request $request)
    {
        $formdata= new Logo;
        $formdata->fname=$request->fname;
        $formdata->surname=$request->surname;
        $formdata->payment=$request->payment;
        $formdata->companyname=$request->companyname;
        $formdata->address=$request->address;
        $formdata->country=$request->country;
        $formdata->city=$request->city;
        $formdata->zipcode=$request->zipcode;
        $formdata->email=$request->email;
        $formdata->nameIncorporatedLogo=$request->nameIncorporatedLogo;
        $formdata->sloganIncorporatedLogo=$request->sloganIncorporatedLogo;
        $formdata->descLogo=$request->descLogo;
        $formdata->listDescOfProducts=$request->listDescOfProducts;
        // $formdata->visionFlogo=$image_links;
        $formdata->visionFlogoName=$request->visionFlogoName;
        $formdata->logoColorName=$request->logoColorName;
        // $formdata->logoColor=$logo;
        $formdata->logoFontName=$request->logoFontName;
        // $formdata->logoFont=fontLogo;
        $formdata->interests=$request->interests;
        $formdata->modern=$request->modern;
        $formdata->playful=$request->playful;
        $formdata->feminine=$request->feminine;
        $formdata->sensible=$request->sensible;
        $formdata->modern1=$request->modern1;
        $formdata->youthful=$request->youthful;
        $formdata->serious=$request->serious;
        $formdata->masculine=$request->masculine;
        $formdata->luxurious=$request->luxurious;
        $formdata->tgAudienece=$request->tgAudienece;
        $formdata->brandStoryName=$request->brandStoryName;
        // $formdata->brandStory=$storybrand;
        $formdata->webUrl=$request->webUrl;
        $formdata->avoid=$request->avoid;
        $formdata->additionalComment=$request->additionalComment;
        $formdata->hearaboutservices=$request->hearaboutservices;
        $formdata->save();
   $image_links=array();
   $logo=array();
   $fontLogo=array();
   $storybrand=array();
foreach($request->visionFlogo as $visionFlogo)
    {
        $tmp_name=$visionFlogo->getPathname();
        $type=$visionFlogo->getMimeType();
        $extension=$visionFlogo->getClientOriginalName();
        $image_name=time().$extension;
        $size=$visionFlogo->getSize();
        $error=$visionFlogo->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;

              $token = 'sl.BDSaCFXtfJoE3dL7dDXgUNZROjqlB6OIjd3KKtbH4H2iayFYF6T_oYNipW0BDWlfXuD-0aKt2QgH300NSbzkGcXI4DFwMczcqWZiTEvxJDZkobVVk1EgxisI24XfozI5nEVHIMkLBC2M'; // oauth token

              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/$formdata->id/" . $image_name,
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
   "path" => "/$formdata->id/". $image_name
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

   array_push($image_links,$link);
   // header('Content-Type: application/json');

            }

//second loop
foreach($request->logoColor as $logoColor)
    {
        $tmp_name=$logoColor->getPathname();
        $type=$logoColor->getMimeType();
        $extension=$logoColor->getClientOriginalName();
        $image_name=time().$extension;
        $size=$logoColor->getSize();
        $error=$logoColor->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;

              $token = 'sl.BDSaCFXtfJoE3dL7dDXgUNZROjqlB6OIjd3KKtbH4H2iayFYF6T_oYNipW0BDWlfXuD-0aKt2QgH300NSbzkGcXI4DFwMczcqWZiTEvxJDZkobVVk1EgxisI24XfozI5nEVHIMkLBC2M'; // oauth token

              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/$formdata->id/" . $image_name,
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
   "path" => "/$formdata->id/". $image_name
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

   array_push($logo,$link);
   // header('Content-Type: application/json');

            }
//third loop
foreach($request->logoFont as $logoFont)
    {
        $tmp_name=$logoFont->getPathname();
        $type=$logoFont->getMimeType();
        $extension=$logoFont->getClientOriginalName();
        $image_name=time().$extension;
        $size=$logoFont->getSize();
        $error=$logoFont->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;

              $token = 'sl.BDSaCFXtfJoE3dL7dDXgUNZROjqlB6OIjd3KKtbH4H2iayFYF6T_oYNipW0BDWlfXuD-0aKt2QgH300NSbzkGcXI4DFwMczcqWZiTEvxJDZkobVVk1EgxisI24XfozI5nEVHIMkLBC2M'; // oauth token

              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/$formdata->id/" . $image_name,
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
   "path" => "/$formdata->id/". $image_name
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

   array_push($fontLogo,$link);
   // header('Content-Type: application/json');

            }
//fourth loop
foreach($request->brandStory as $brandStory)
    {
        $tmp_name=$brandStory->getPathname();
        $type=$brandStory->getMimeType();
        $extension=$brandStory->getClientOriginalName();
        $image_name=time().$extension;
        $size=$brandStory->getSize();
        $error=$brandStory->getError();
      //  dd($tmp_name,$type,$extension,$image_name,$size,$error);
         $file = $tmp_name;


            $temp = explode(".", $image_name);

              $newfilename = round(microtime(true)) . '.' . end($temp);
          // dd($newfilename);
            //   $path = "/Companies/$company->company_name/" . $newfilename;

              $token = 'sl.BDSaCFXtfJoE3dL7dDXgUNZROjqlB6OIjd3KKtbH4H2iayFYF6T_oYNipW0BDWlfXuD-0aKt2QgH300NSbzkGcXI4DFwMczcqWZiTEvxJDZkobVVk1EgxisI24XfozI5nEVHIMkLBC2M'; // oauth token

              $api_url = 'https://content.dropboxapi.com/2/files/upload';

              $headers = array('Authorization: Bearer ' .$token,
                  'Content-Type: application/octet-stream',
                  'Dropbox-API-Arg: ' .
                  json_encode(
                          array(
                              "path" =>"/$formdata->id/" . $image_name,
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
   "path" => "/$formdata->id/". $image_name
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

   array_push($storybrand,$link);
   // header('Content-Type: application/json');

            }
dd("inserted Alhamdullah");

    }
}