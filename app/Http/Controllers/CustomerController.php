<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DropboxClient;
use DropboxWriteMode;
use App\Models\Logo;
use Spatie\Dropbox\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class CustomerController extends Controller
{
    public function index()
    {
        $logo=Logo::all();
        return view('Dashboard.customerList',compact('logo'));
    }

    public function show($id)
    {
       $user= Auth::check();

        if($user==true)
        {
             $customid=Logo::where('id',$id)->first();
           return view('Dashboard.profile',compact('customid'));
        }else
        {
            return redirect('/');
        }

    }

public function  removeFiles(Request $request,$id)
{
 $parameters = array('path' =>'/'.$id);
$headers = array('Authorization: Bearer Authorization: Bearer sl.BD-0wPbPwP1kEBgUXQ_Jrx9k94YSfnYwCAmcegLIE1oxXwlMDNDN426oxM85RqZgYkAy8cxCMAFTa07fzHze9nLTpKmruQ0W8aEPvp9HcGryXE_1-7wCph_JM7B_FGeBazFGXSBf9dWS','Content-Type: application/json',
                 'Content-Type: application/json');

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
$profile=Logo::findOrFail($id);
$profile->delete();
return redirect('/customer-list');

}
// public function showmail()
// {
//     return view('layouts.adminemail');
// }

}