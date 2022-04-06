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
<form action="{{route('delete-listing2',$customid->id)}}" method="post">
    @csrf
<button class="sendrequestBtn" style="float: left; margin:10px ;">Delete Form</button>

</form>
  <div class="formSection">
    <h1 class="formHeading text-center">
       Quotation Of Listing2 Design
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
              {{$customid->photo}}
            <div class="inputImages">
               @if(isset($customid->photo_file))
               @foreach (json_decode($customid->photo_file) as $image)
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
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <label for="nameIncorporatedLogo" class="formLabel">Product name and description:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="nameIncorporatedLogo"> -->
        <div class="displayInputData">
            {{$customid->tgAudienece}}
                    </div>
      </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">All product details:
        </label>
        <!-- <input type="text" name="visionFlogo" class="input" maxlength="800">
        <label for="attachlogodesign" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachlogodesign" class="inpFile" multiple> -->
        <div class="displayInputData">
              {{$customid->benefit}}
            <div class="inputImages">
               @if(isset($customid->benefit_file))
               @foreach (json_decode($customid->benefit_file) as $image)
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
        <label for="visionFlogo" class="formLabel">Your product attach files:
        </label>
        <!-- <input type="text" name="visionFlogo" class="input" maxlength="800">
        <label for="attachlogodesign" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachlogodesign" class="inpFile" multiple> -->
        <div class="displayInputData">
              {{$customid->manual}}
            <div class="inputImages">
               @if(isset($customid->manual_file))
               @foreach (json_decode($customid->manual_file) as $image)
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
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <label for="nameIncorporatedLogo" class="formLabel">A list of  product unique or stand out from the competition:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="nameIncorporatedLogo"> -->
        <div class="displayInputData">
            {{$customid->unique}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="sloganIncorporatedLogo" class="formLabel">Product giftable:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="sloganIncorporatedLogo"> -->
        <div class="displayInputData">
             {{$customid->giftable}}

                    </div>
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">Product packaging print ready file in Ai:
        </label>
        <!-- <input type="text" name="visionFlogo" class="input" maxlength="800">
        <label for="attachlogodesign" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachlogodesign" class="inpFile" multiple> -->
        <div class="displayInputData">
              {{$customid->ready}}
            <div class="inputImages">
               @if(isset($customid->ready_file))
               @foreach (json_decode($customid->ready_file) as $image)
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
        <label for="visionFlogo" class="formLabel">Product come with a product manual:
        </label>
        <!-- <input type="text" name="visionFlogo" class="input" maxlength="800">
        <label for="attachlogodesign" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachlogodesign" class="inpFile" multiple> -->
        <div class="displayInputData">
              {{$customid->product}}
            <div class="inputImages">
               @if(isset($customid->product_file))
               @foreach (json_decode($customid->product_file) as $image)
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
        <label for="descLogo" class="formLabel">listing for this product is currently live:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="descLogo"> -->
        <div class="displayInputData">
             {{$customid->currently}}

                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="listDescOfProducts" class="formLabel">Products under this brand:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="listDescOfProducts"> -->
        <div class="displayInputData">
            {{$customid->under}}

                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3 ">
        <p class="formLabel mb-2">
        Described brand:
        </p>
         <div class="checkboxDiv">

          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="interests" {{  ($customid->luxury == 'on' ? ' checked' : '') }}>
                <label for="interests" class="cbx"></label>
              </div>
              <label for="classicCb" class="formLabel m-0">Luxury</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="modern"  {{  ($customid->casual == 'on' ? ' checked' : '') }}>
                <label for="MatureCb" class="cbx"></label>
              </div>
              <label for="MatureCb" class="formLabel m-0">Casual</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="playful"  {{  ($customid->expensive == 'on' ? ' checked' : '') }}>
                <label for="PlayfulCb" class="cbx"></label>
              </div>
              <label for="PlayfulCb" class="formLabel m-0">Expensive</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="feminine"  {{  ($customid->economic == 'on' ? ' checked' : '') }}>
                <label for="FeminineCb" class="cbx"></label>
              </div>
              <label for="FeminineCb" class="formLabel m-0">Economic</label>
            </div>

          </div>
          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="modern1" {{ ($customid->serious == 'on' ? ' checked' : '') }}>
                <label for="modernCb" class="cbx"></label>
              </div>
              <label for="modernCb" class="formLabel m-0">Serious</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="youthful" {{  ($customid->feminine == 'on' ? ' checked' : '') }}>
                <label for="YouthfulCb" class="cbx"></label>
              </div>
              <label for="YouthfulCb" class="formLabel m-0">Feminine</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="serious" {{  ($customid->masculine == 'on' ? ' checked' : '') }}>
                <label for="SeriousCb" class="cbx"></label>
              </div>
              <label for="SeriousCb" class="formLabel m-0">Masculine</label>
            </div>
               <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="sensible"  {{  ($customid->playfu == 'on' ? ' checked' : '') }}>
                <label for="SensibleCb" class="cbx"></label>
              </div>
              <label for="SensibleCb" class="formLabel m-0">Playfu</label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Product's price point in comparison to the competition:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->comparison}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="brandStory" class="formLabel">The acceptable formats for logo are Ai:
        </label>
        <div class="displayInputData">

          {{$customid->high}}
            <div class="inputImages">
                  @if(isset($customid->high_file))
                @foreach (json_decode($customid->high_file) as $image)
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
        <!-- <textarea name="name" rows="6" cols="80" class="input" maxlength="2000"></textarea> -->

        <!-- <input type="text" name="brandStory" class="input" maxlength="2000"> -->
        <!-- <label for="brandstoryimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="brandstoryimg" class="inpFile" multiple> -->
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="brandStory" class="formLabel">Color codes and fonts of brand
        </label>
        <div class="displayInputData">

          {{$customid->specific}}
            <div class="inputImages">
                  @if(isset($customid->specific_file))
                @foreach (json_decode($customid->specific_file) as $image)
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
        <!-- <textarea name="name" rows="6" cols="80" class="input" maxlength="2000"></textarea> -->

        <!-- <input type="text" name="brandStory" class="input" maxlength="2000"> -->
        <!-- <label for="brandstoryimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="brandstoryimg" class="inpFile" multiple> -->
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="webUrl" class="formLabel">Target audience for this product::
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="webUrl"> -->
        <div class="displayInputData">
            {{$customid->targete}}
                    </div>
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">

        <label for="webUrl" class="formLabel">Top competitors:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="webUrl"> -->
        <div class="displayInputData">
            {{$customid->webUrl}}
                    </div>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="avoid" class="formLabel">What to avoid:
        </label>
        <!-- <input type="text" name="avoid" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->avoid}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="additionalComment" class="formLabel">Additional comments:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="additionalComment"> -->
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
