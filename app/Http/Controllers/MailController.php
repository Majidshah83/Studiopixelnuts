<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
class MailController extends Controller
{
    public function show()
    {
     $logodata=Logo::all();
     return view('layouts.mailTemplate',compact('logodata'));
    }
}