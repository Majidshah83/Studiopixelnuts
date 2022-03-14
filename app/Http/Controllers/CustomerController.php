<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\Auth;
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

    public function  destroy($id)
    {
         $user= Auth::check();

        if($user==true)
        {
         $profile=Logo::find($id);
         $profile->delete($profile);
         return redirect('/customer-list');
        }
        return redirect('/');
    }

}