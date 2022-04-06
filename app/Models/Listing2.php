<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing2 extends Model
{
    use HasFactory;
     protected $fillable = ['fname','surname','hearaboutservices','payment','companyname','address',
     'city','country', 'zipcode','email','photo','photo_file','tgAudienece','benefit','benefit_file','manual','manual_file'
     ,'unique','giftable','ready','ready_file','product','product_file','currently','under','luxury','expensive','playful',
     'feminine','casual','economic','serious','masculine','comparison','high','high_file','specific','specific_file','targete',
     'webUrl','avoid','additionalComment'

];
}