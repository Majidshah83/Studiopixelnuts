<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form | Pixelnuts</title>

  <link rel="shortcut icon" href="{{asset('public/img/main/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('public/img/main/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/gijgo.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/slicknav.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body style="margin: 0; padding: 0;  width: 100%;
height: auto;
background-image: url('{{asset('public/img/main/formBg.jpg')}}');
background-size: cover;">
{{-- <a href="{{route('delete-profile',$customid->id)}}" class="forumbtn">Delete Form</a> --}}
<form action="{{route('delete-listing',$customid->id)}}" method="post">
    @csrf
<button class="sendrequestBtn" style="float: left; margin:10px ;">Delete Form</button>

</form>
  <div class="formSection">
    <h1 class="formHeading text-center">
      Quotation Of Listing Design
    </h1>
    <div class="row mt-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="fname" class="formLabel">Name: </label>
        <!-- <input type="text" name="fname" class="input" maxlength="800"> -->
        <div class="displayInputData ">
      {{$customid->fname}}
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3 mt-md-0">
        <label for="surname" class="formLabel">Surname:</label>
        <!-- <input type="text" name="surname" class="input" maxlength="800"> -->
        <div class="displayInputData">

            {{$customid->surname}}

                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
        <label for="hearaboutservices" class="formLabel">Hear about our services!
        </label>
        <!-- <input type="text" name="hearaboutservices" class="input" maxlength="800"> -->
        <div class="displayInputData">

            {{$customid->hearaboutservices}}

                    </div>
      </div>
    </div>
    <h1 class="formHeading mt-5">
      Invoice details:
    </h1>
    <div class="row mt-0">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <p class="formLabel m-0">
         Prefered payment method:
        </p>
        <div class="displayInputData">
           {{$customid->payment}}
                    </div>
        <!-- <p class="formLabel-sm">
          Note: If method of payment is paypal, 6% of paypal fees will be included in the invoice.
        </p> -->

        <!-- <select name="" id="" class="formSelect">
          <option value="">Select</option>
          <option value="BankTransfer"> Bank Transfer
          </option>
          <option value="Paypal"> Paypal</option>
        </select> -->

      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="companyname" class="formLabel">Company name:</label>
        <!-- <input type="text" class="input" maxlength="800" name="companyname"> -->
        <div class="displayInputData">
            {{$customid->companyname}}

                    </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Address" class="formLabel">Address:</label>
        <!-- <input type="text" name="Address" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->address}}
                    </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="City" class="formLabel"> City:</label>
        <!-- <input type="text" class="input" maxlength="800" name="City"> -->
        <div class="displayInputData">
            {{$customid->city}}

                    </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Country" class="formLabel"> Country:</label>
        <!-- <input type="text" name="Country" class="input" maxlength="800"> -->
        <div class="displayInputData">
             {{$customid->country}}
                    </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="zipcode" class="formLabel"> Zip code:</label>
        <!-- <input type="text" class="input" maxlength="800" name="zipcode"> -->
        <div class="displayInputData">
            {{$customid->zipcode}}
                    </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="email" class="formLabel"> Email:</label>
        <!-- <input type="text" name="email" class="input" maxlength="800"> -->
        <div class="displayInputData">
            {{$customid->email}}

                    </div>
      </div>
    </div>
    <h1 class="formHeading mt-4">
      Project details:
    </h1>
    <div class="row mt-3">

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">All product photos:
        </label>
        <!-- <input type="text" name="visionFlogo" class="input" maxlength="800">
        <label for="attachlogodesign" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachlogodesign" class="inpFile" multiple> -->
        <div class="displayInputData">
              {{$customid->photos}}
            <div class="inputImages">
              @if(isset($customid->photos_file))
               @foreach (json_decode($customid->photos_file) as $image)
              @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel">Image 1 - Main Image:<br>
          <!-- <i>(Optional: Attach an image of color palette)</i> -->
        </label>
        <!-- <input type="text" name="logoColor" class="input" maxlength="800"> -->
        <!-- <label for="logocolorimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logocolorimg" class="inpFile" multiple> -->
        <div class="displayInputData">
              {{$customid->main}}
            <div class="inputImages">
                   @if(isset($customid->main_file))
                  @foreach (json_decode($customid->main_file) as $image)
               @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Image 2:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->competitor}}

            <div class="inputImages">
                 @if(isset($customid->competitor_file))
                 @foreach (json_decode($customid->competitor_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->images}}
                    </div>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">use any stock photos in this image, provide links:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->stock}}
                    </div>
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Image 3:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->sketch}}

            <div class="inputImages">
                  @if(isset($customid->sketch_file))
                 @foreach (json_decode($customid->sketch_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif

                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->timage}}
                    </div>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">use any stock photos in this image, provide links:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->stock_image}}
                    </div>
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Image 4:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->design}}

            <div class="inputImages">
                 @if(isset($customid->design_file))
                 @foreach (json_decode($customid->design_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->text_image}}
                    </div>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">use any stock photos in this image, provide links:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->provide_image}}
                    </div>
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Image 5:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->reference}}

            <div class="inputImages">
                   @if(isset($customid->reference_file))
                 @foreach (json_decode($customid->reference_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->audi_image}}
                    </div>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">use any stock photos in this image, provide links:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->link_image}}
                    </div>
      </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Image 6:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->logo_image}}

            <div class="inputImages">
                 @if(isset($customid->logo_image_file))
                 @foreach (json_decode($customid->logo_image_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif

                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->be_image}}
                    </div>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">use any stock photos in this image, provide links:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->any_image}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Image 7:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->or_image}}

            <div class="inputImages">
               @if(isset($customid->or_image_file))
                 @foreach (json_decode($customid->or_image_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->image_tg}}
                    </div>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">use any stock photos in this image, provide links:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->likeimage}}
                    </div>
      </div>
    </div>
     <h1 class="formHeading mt-4">
     Additional information:
    </h1>
     <div class="row mt-3">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Your listing copy:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->infographics}}

            <div class="inputImages">
                 @if(isset($customid->infographics_file))
                 @foreach (json_decode($customid->infographics_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">The acceptable formats for logo:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->vector}}

            <div class="inputImages">
                 @if(isset($customid->vector_file))
                 @foreach (json_decode($customid->vector_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif

                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Graphic elements in your infographics/photo manipulation images:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->palette}}

            <div class="inputImages">
                  @if(isset($customid->palette_file))
                 @foreach (json_decode($customid->palette_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif

                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Infographics/photo manipulation images:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->info}}

            <div class="inputImages">
                    @if(isset($customid->info_file))
                 @foreach (json_decode($customid->info_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif

                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Target audience for this product:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->target_image}}
                    </div>
      </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Branding guide, please attach it:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->guidei}}

            <div class="inputImages">
                  @if(isset($customid->guidei_file))
                 @foreach (json_decode($customid->guidei_file) as $image)
                @if(str_contains($image, '.jpg')||str_contains($image, '.png')||str_contains($image, '.PNG')||str_contains($image, '.JPG'))
               <div class="imgbtn" style="background: url({{$image}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.psd'))
                 <div class="imgbtn" style="background: url({{asset('public/img/psd.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @elseif(str_contains($image, '.pdf'))
                 <div class="imgbtn" style="background: url({{asset('public/img/pdf.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.ai'))
                <div class="imgbtn" style="background: url({{asset('public/img/Adobe_Illustrator_.AI_File_Icon.png')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @elseif(str_contains($image, '.xd'))
                <div class="imgbtn" style="background: url({{asset('public/img/xd.webp')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                 @else
                <div class="imgbtn" style="background: url({{asset('public/img/text.jpg')}})">
                 {{-- <img src="{{$image}}" alt=""> --}}
                 <a class="downloadBtn" href="{{$image}}"><button>download</button></a>
                </div>
                @endif
                @endforeach
                @endif

                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
        <!-- <input type="text" name="logoFont" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" class="inpFile" multiple> -->
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Website, storefront or listing URL:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->webUrl}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Your top competitors:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->topcompetitor}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Avoid:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->avoid}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Additional comments:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->additionalComment}}
                    </div>
      </div>
     </div>
    <a href="mailto:{{$customid->email}}"><button class="sendrequestBtn" style="float: right; margin:10px 0;">Reply</button></a>
  </div>
  <!-- <div class="sendRequest">
    <button class="sendrequestBtn btn-popup"> Send Request</button>
  </div> -->



    <!-- <div class="popup" id="popup"  >
      <div class="single_prising text-center " style="max-height: 260px; max-width: 500px;">
          <div class="prising_header d-flex justify-content-center align-items-center">
              <h3 class="" >Your request has been sent successfully!
              </h3>
          </div>
          <div class="p-4 text-div">

              <p class="popuppara">
                Thank you for submitting your details.
 <br>
 We will review all provided information and
 <br>
 get back to you as soon as we can.

              </p>

              <div class="prising_bottom2">
                  <button class="get_now prising_btn close-popup">Close</button>
              </div>
          </div>

      </div>
  </div> -->
    <script src="https://kit.fontawesome.com/2c7577337a.js" crossorigin="anonymous"></script>
    <!--checkboox scrpit-->
    <script>
     $('.test').each(function() {
    if ($(this).val() != 'on') {
        $(this).parent().prev().attr('disabled', 'disabled');
    }
});
    </script>
</body>

</html>
