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
        $logo=Logo::orderBy('id', 'ASC')->get();
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


}