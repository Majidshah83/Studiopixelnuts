<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
    'fname','surname','hearaboutservices'.'payment','companyname','address','city','country',
    'zipcode','email','productName','productShortDesc','typeOfPackage','picOfPackage','pic_file','size_file',
    'sizeOfPackagingimg','attachPackageDesign','design_file','attachLogo','slogofiles','packageText',
    'packageTextfile','attachPackageimages','attachPackagefile','colorPackage','colorPackagefile','fontPackage',
    'fontPackagefile','includeWebsite','barcode','barcodefile','productManufacture','certificationsORwarning','certificationsORwarninfile','classic','mature',
    'playful','feminine','sensible','modern','youthful','serious','masculine','luxurious','tgAudienece',
    'webUrl','avoid','additionalComment'


];
}
