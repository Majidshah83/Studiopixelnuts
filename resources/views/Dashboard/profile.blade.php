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
<form action="{{route('delete-profile',$customid->id)}}" method="post">
    @csrf
<button class="sendrequestBtn" style="float: left; margin:10px ;">Delete Form</button>

</form>
  <div class="formSection">
    <h1 class="formHeading text-center">
      Quotation Of Logo Design
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
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <label for="nameIncorporatedLogo" class="formLabel">Incorporated logo name:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="nameIncorporatedLogo"> -->
        <div class="displayInputData">
            {{$customid->nameIncorporatedLogo}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="sloganIncorporatedLogo" class="formLabel">Incorporated logo slogan:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="sloganIncorporatedLogo"> -->
        <div class="displayInputData">
             {{$customid->sloganIncorporatedLogo}}

                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="descLogo" class="formLabel"> Short description of the logo:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="descLogo"> -->
        <div class="displayInputData">
             {{$customid->descLogo}}

                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="listDescOfProducts" class="formLabel">A list and description of products that will be sold under this brand name:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="listDescOfProducts"> -->
        <div class="displayInputData">
            {{$customid->listDescOfProducts}}

                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">Vision of the logo design and attached designs:
        </label>
        <!-- <input type="text" name="visionFlogo" class="input" maxlength="800">
        <label for="attachlogodesign" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachlogodesign" class="inpFile" multiple> -->
        <div class="displayInputData">
              {{$customid->visionFlogoName}}


            <div class="inputImages">
               @foreach (json_decode($customid->visionFlogo) as $image)
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
                {{-- <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt="">
                <img src="img/main/Coming-Soon.png" alt=""> --}}
            </div>
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel">Colors want to use in  logo design:<br>
          <!-- <i>(Optional: Attach an image of color palette)</i> -->
        </label>
        <!-- <input type="text" name="logoColor" class="input" maxlength="800"> -->
        <!-- <label for="logocolorimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logocolorimg" class="inpFile" multiple> -->
        <div class="displayInputData">
            <div class="inputImages">
               
                @foreach (json_decode($customid->logoColor) as $image)
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
        <label for="logoFont" class="formLabel">Fonts want to use in  logo design:<br>
          <!-- <i>(Optional: Attach images of fonts that you like)
          </i> -->
        </label>
        <div class="displayInputData">

             {{$customid->logoFontName}}

            <div class="inputImages">
                 @foreach (json_decode($customid->logoFont) as $image)
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
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3 ">
        <p class="formLabel mb-2">
          Creative vision:
        </p>

         <div class="checkboxDiv">

          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="interests" {{  ($customid->interests == 'on' ? ' checked' : '') }}>
                <label for="interests" class="cbx"></label>
              </div>
              <label for="classicCb" class="formLabel m-0">Classic</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="modern"  {{  ($customid->modern == 'on' ? ' checked' : '') }}>
                <label for="MatureCb" class="cbx"></label>
              </div>
              <label for="MatureCb" class="formLabel m-0">Mature</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="playful"  {{  ($customid->playful == 'on' ? ' checked' : '') }}>
                <label for="PlayfulCb" class="cbx"></label>
              </div>
              <label for="PlayfulCb" class="formLabel m-0">Playful</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="feminine"  {{  ($customid->feminine == 'on' ? ' checked' : '') }}>
                <label for="FeminineCb" class="cbx"></label>
              </div>
              <label for="FeminineCb" class="formLabel m-0">Feminine</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="sensible"  {{  ($customid->sensible == 'on' ? ' checked' : '') }}>
                <label for="SensibleCb" class="cbx"></label>
              </div>
              <label for="SensibleCb" class="formLabel m-0">Sensible</label>
            </div>
          </div>
          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="modern1" {{  ($customid->modern1 == 'on' ? ' checked' : '') }}>
                <label for="modernCb" class="cbx"></label>
              </div>
              <label for="modernCb" class="formLabel m-0">Modern</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="youthful" {{  ($customid->youthful == 'on' ? ' checked' : '') }}>
                <label for="YouthfulCb" class="cbx"></label>
              </div>
              <label for="YouthfulCb" class="formLabel m-0">Youthful</label>
            </div>

            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="serious" {{  ($customid->serious == 'on' ? ' checked' : '') }}>
                <label for="SeriousCb" class="cbx"></label>
              </div>
              <label for="SeriousCb" class="formLabel m-0">Serious</label>
            </div>

            <div class="Checkbox">


              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="masculine" {{  ($customid->masculine == 'on' ? ' checked' : '') }}>
                <label for="MasculineCb" class="cbx"></label>
              </div>
              <label for="MasculineCb" class="formLabel m-0">Masculine</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="test" class="hidden-xs-up cbx1" name="luxurious" {{  ($customid->luxurious == 'on' ? ' checked' : '') }}>
                <label for="LuxuriousCb" class="cbx"></label>
              </div>
              <label for="LuxuriousCb" class="formLabel m-0">Luxurious</label>
            </div>
          </div>










        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Described  target audience:
        </label>
        <!-- <input type="text" name="tgAudienece" class="input" maxlength="800"> -->
        <div class="displayInputData">
           {{$customid->tgAudienece}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="brandStory" class="formLabel">Brand story
        </label>
        <div class="displayInputData">

          {{$customid->brandStoryName}}
            <div class="inputImages">
                @foreach (json_decode($customid->brandStory) as $image)
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
        <label for="webUrl" class="formLabel">Website, storefront or listing URL:
        </label>
        <!-- <input type="text" class="input" maxlength="800" name="webUrl"> -->
        <div class="displayInputData">
            {{$customid->webUrl}}
                    </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="avoid" class="formLabel">What to avoid?
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
