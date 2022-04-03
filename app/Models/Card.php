<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
     protected $fillable = ['fname','surname','hearaboutservices','payment','companyname','address','city','country',
    'zipcode','email','card','productShortDesc','sizeformat','picOfPackage'
    ,'picOfPackage_file','inspiration','inspiration_file','logo','logo_file','attachLogo','attachLogo_file',
'buyer','brand','instruct','bought','advertise','card_design','card_design_file','palette','palette_file',
'fonts','fonts_file','resolution','resolution_file','includeWebsite','luxury','minimalist','playful','feminine',
'casual','detailed','serious','masculine','audience','webUrl','avoid','additionalComment',

];
}
