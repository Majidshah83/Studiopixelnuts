<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $fillable = ['fname','surname','payment','companyname','address','city','country',
    'zipcode','email','nameIncorporatedLogo','sloganIncorporatedLogo','descLogo','listDescOfProducts',
    'visionFlogo','logoColor','logoFont','interests','tgAudienece','brandStory','webUrl','avoid','additionalComment',
    'hearaboutservices','visionFlogoName','logoColorName','logoFontName','brandStoryName','playful','feminine','sensible',
    'modern','youthful','serious','masculine','luxurious','modern1',

];

}