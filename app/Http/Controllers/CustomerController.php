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
$url  = array('path' =>'/'.$id);
$data = array('Authorization: Bearer sl.BD7GvGwUAQ17j_up5Y-ogcfHDEirbdrbl80nxvLFsREjqrfAmCy6G6aFnldxSL_oBW1N-0XvISYVcc6owP3G6y_23NNH4AJjwhT6JRpb3HHE8OK7bssRkJgUhp3hZ6AAvjCT2DB8-FEC',
                 'Content-Type: application/json');

$curlOptions = array(
        CURLOPT_HTTPHEADER => $data,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($url ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_VERBOSE => true
    );
$ch = curl_init('https://api.dropboxapi.com/2/files/delete_v2');
curl_setopt_array($ch, $curlOptions);
$response = curl_exec($ch);
curl_close($ch);
$profile=Logo::findOrFail($id);
$profile->delete();
return redirect('/customer-list');

}

}
