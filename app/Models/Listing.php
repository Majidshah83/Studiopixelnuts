<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
     protected $fillable = ['fname','surname','hearaboutservices','payment','companyname','address',
     'city','country', 'zipcode','email','photos','photos_file','main',
     'main_file',
    'competitor','competitor_file','images','stock','sketch','sketch_file','timage','stock_image',
    'design','design_file','text_image','provide_image','reference','reference_file',
    'audi_image','link_image','logo_image','logo_image_file','be_image','any_image','or_image',
    'or_image_file','image_tg','likeimage','infographics','infographics_file','vector','vector_file',
    'palette','palette_file','info','info_file','target_image','guidei','guidei_file',
    'webUrl','topcompetitor','avoid','additionalComment'

];
}