<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
class ListingControlller extends Controller
{
    //
    public function index()
    {
        return view('layouts.quote-listing');
    }
    
public function store(Request $request)
{
   dd("majid");
}

}