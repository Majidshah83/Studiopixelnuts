<?php
namespace App\Http\Traits;
trait FileTrait{
    public function uploadfiles($photos_file,$folder,$token,$id)
    {
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
                              "path" =>"/.$folder/$id/" . $image_name,
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
   "path" => "/.$folder/$id/". $image_name
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
                return $link;
                // array_push($photosfile, $link);
                // header('Content-Type: application/json');


            }





}