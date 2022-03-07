<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
class CustomerController extends Controller
{
    public function index()
    {
        $logo=Logo::all();
        return view('Dashboard.customerList',compact('logo'));
    }
    public function show($id)
    {
        $customid=Logo::where('id',$id)->first();
        return view('Dashboard.profile',compact('customid'));
    }

}