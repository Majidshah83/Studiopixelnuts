@include('layouts.header')
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
  <div class="formSection">
    <h1 class="formHeading">
      In order to get started, please fill out information below:
    </h1>
     <form id="myForm" method="POST" action="{{route('card-store')}}" enctype="multipart/form-data">
        @csrf
    <div class="row mt-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="fname" class="formLabel">Your name:<span>*</span> </label>
        <input type="text" name="fname" class="input required-inputs" maxlength="800">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3 mt-md-0">
        <label for="surname" class="formLabel">Your surname:<span>*</span></label>
        <input type="text" name="surname" class="input required-inputs" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
        <label for="hearaboutservices" class="formLabel">How did you hear about our services?
        </label>
        <input type="text" name="hearaboutservices" class="input" maxlength="800">
      </div>
    </div>
    <h1 class="formHeading mt-5">
      Invoice details:
    </h1>
    <div class="row mt-0">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <p class="formLabel m-0">
          Which method of payment do you prefer?<span>*</span>
        </p>
        <p class="formLabel-sm">
          Note: If method of payment is paypal, 6% of paypal fees will be included in the invoice.
        </p>

        <select name="payment" id="" class="formSelect required-inputs">
          <option value="">Select</option>
          <option value="BankTransfer"> Bank Transfer
          </option>
          <option value="Paypal"> Paypal</option>
        </select>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="companyname" class="formLabel">Company name:<span>*</span></label>
        <input type="text" class="input required-inputs" maxlength="800" name="companyname">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Address" class="formLabel">Address:<span>*</span></label>
        <input type="text" name="address" class="input required-inputs" maxlength="800">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="City" class="formLabel"> City:<span>*</span></label>
        <input type="text" class="input required-inputs" maxlength="800" name="city">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Country" class="formLabel"> Country:<span>*</span></label>
        <input type="text" name="country" class="input required-inputs" maxlength="800">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="zipcode" class="formLabel"> Zip code:<span>*</span></label>
        <input type="text" class="input required-inputs" maxlength="800" name="zipcode">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="email" class="formLabel"> Email:<span>*</span></label>
        <input type="text" name="email" class="input required-inputs" maxlength="800">
      </div>
    </div>
    <h1 class="formHeading mt-4">
      Project details:
    </h1>
    <div class="row mt-3">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
            <p class="formLabel m-0">
                Type of insert card and number of pages:<span>*</span>
            </p>


            <select name="card" id="" class="formSelect required-inputs">
              <option value="">Select</option>
              <option value="doublesided"> Double-Sided (2 Pages)
              </option>
              <option value="bifold"> Bi-Fold (4 Pages)
            </option>
              <option value="trifold">Tri-Fold (6 Pages)

            </option>
              <option value="other"> Other (Please Describe)

            </option>
            </select>
            <input type="text" class="input mt-2" maxlength="800" name="productShortDesc">
          </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <label for="sizeformat" class="formLabel">Size/format of insert card:*
            <span>*</span>
        </label>
        <input type="text" class="input required-inputs" maxlength="800" name="sizeformat">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="picOfPackage" class="formLabel">Design Inspiration: Attach references to the designs that you like so that
            we can understand which direction you would like us to go in: <span>*</span>

        </label>
        <input type="text" name="picOfPackage" class="input" maxlength="800">
        <label for="attachPackagePic" class="inpimg required-inputs required"><i class="fas fa-image"></i></label> <input type="file" id="attachPackagePic" name="picOfPackage_file[]" class="inpFile required-inputs required" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="sizeOfPackaging" class="formLabel">Logo: Attach your logo in Ai, Eps or PDF (vector formats) or high resolution
            JPEG or PNG:
            <br>
          <i>In case we’re working on your logo design, leave this section blank. If not, this section is
            required.  </i>

        </label>
        <input type="text" name="inspiration" class="input" maxlength="800">
        <label for="sizeOfPackagingimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="sizeOfPackagingimg" name="inspiration_file[]" class="inpFile" multiple>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="attachPackageDesign" class="formLabel">Design Inspiration: Attach references to the designs that you like so that <br>
            we can understand which direction you would like us to go in.
        </label>
        <input type="text" name="logo" class="input" maxlength="800">
        <label for="attachPackageDesignimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachPackageDesignimg" name="logo_file[]" class="inpFile" multiple>
      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="attachLogo" class="formLabel">Logo: Attach your logo in Ai, Eps or PDF (vector formats) or high resolution
            JPEG or PNG: <br>
        <i>
            In case we’re working on your logo design, leave this section blank. If not, this section is
required.
        </i>
        </label>
        <input type="text" name="attachLogo" class="input" maxlength="800">
        <label for="attachLogoimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachLogoimg" name="attachLogo_file[]" class="inpFile" multiple>
      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3 ">
        <p class="formLabel mb-2">
            What would you want the purpose of your card/brochure to be?

        </p>

        <div class="checkboxDiv checkboxDiv2">

          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="classicCb" name="buyer" class="hidden-xs-up cbx1">
                <label for="classicCb" class="cbx"></label>
              </div>
              <label for="classicCb" class="formLabel m-0">To ask buyers to leave you a review
            </label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" name="brand" id="MatureCb" class="hidden-xs-up cbx1">
                <label for="MatureCb" class="cbx"></label>
              </div>
              <label for="MatureCb" class="formLabel m-0">To tell buyers a little bit about your brand or product
            </label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" name="instruct" id="PlayfulCb" class="hidden-xs-up cbx1">
                <label for="PlayfulCb" class="cbx"></label>
              </div>
              <label for="PlayfulCb" class="formLabel m-0">To provide instructions on how to use the product
            </label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" name="bought" id="FeminineCb" class="hidden-xs-up cbx1">
                <label for="FeminineCb" class="cbx"></label>
              </div>
              <label for="FeminineCb" class="formLabel m-0">To give buyers the option of contacting you after they have bought the product
            </label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" name="advertise" id="SensibleCb" class="hidden-xs-up cbx1">
                <label for="SensibleCb" class="cbx"></label>
              </div>
              <label for="SensibleCb" class="formLabel m-0">To advertise other products under your existing brand
            </label>
            </div>
        </div>

        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="packageText" class="formLabel">Text to be used in insert card design: Write down or attach a word
            document with the text that you want used in the insert card design.<br>
        <i>
            Be sure to divide it into sections: Front side, Back side, Inner left, Inner right, etc...
        </i>
        </label>
        <input type="text" name="card_design" class="input" maxlength="800">
        <label for="packageTextimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="packageTextimg" name="card_design_file[]" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="attachPackageimages" class="formLabel">Which colors would you like us to use in your insert card design?
            <br>
            <i>
                (Optional: Attach an image of color palette)

            </i>
        </label>
        <input type="text" name="palette" class="input" maxlength="800">
        <label for="attachPackageimagesimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachPackageimagesimg" name="palette_file[]" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="colorPackage" class="formLabel">Which fonts would you like to use in your insert card design?
            <br>
            <i>
                (Optional: Attach images of fonts that you like)

            </i>

        </label>
        <input type="text" name="fonts" class="input" maxlength="800">
        <label for="colorPackageimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="fonts_file[]" id="colorPackageimg" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="fontPackage" class="formLabel">Images: If your insert card is supposed to include images of your product,
            please attach them. They should be in high resolution.
        </label>
        <input type="text" name="resolution" class="input" maxlength="800">
        <label for="fontPackageimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="fontPackageimg" name="resolution_file[]" class="inpFile" multiple>
      </div>




      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="includeWebsite" class="formLabel">Do you need any graphics designed in your insert card? If so, describe it
            and attach a reference:
        </label>
        <input type="text" name="includeWebsite" class="input" maxlength="800">
      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3 ">
        <p class="formLabel mb-2">
            Creative vision: How do you see your insert card design?

        </p>

        <div class="checkboxDiv">

          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="luxury" name="luxury" class="hidden-xs-up cbx1">
                <label for="luxury" class="cbx"></label>
              </div>
              <label for="luxury" class="formLabel m-0">Luxury</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="minimalist" name="minimalist" class="hidden-xs-up cbx1">
                <label for="minimalist" class="cbx"></label>
              </div>
              <label for="minimalist" class="formLabel m-0">Minimalist</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="playful" name="playful" class="hidden-xs-up cbx1">
                <label for="playful" class="cbx"></label>
              </div>
              <label for="playful" class="formLabel m-0">Playful</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="feminine" name="feminine" class="hidden-xs-up cbx1">
                <label for="feminine" class="cbx"></label>
              </div>
              <label for="feminine" class="formLabel m-0">Feminine</label>
            </div>

          </div>
          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="modernCb" name="casual" class="hidden-xs-up cbx1">
                <label for="modernCb" class="cbx"></label>
              </div>
              <label for="modernCb" class="formLabel m-0">Casual</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="YouthfulCb" name="detailed" class="hidden-xs-up cbx1">
                <label for="YouthfulCb" class="cbx"></label>
              </div>
              <label for="YouthfulCb" class="formLabel m-0">Detailed</label>
            </div>

            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="SeriousCb" name="serious" class="hidden-xs-up cbx1">
                <label for="SeriousCb" class="cbx"></label>
              </div>
              <label for="SeriousCb" class="formLabel m-0">Serious</label>
            </div>

            <div class="Checkbox">


              <div class="cntr">
                <input type="checkbox" id="MasculineCb" name="masculine" class="hidden-xs-up cbx1">
                <label for="MasculineCb" class="cbx"></label>
              </div>
              <label for="MasculineCb" class="formLabel m-0">Masculine</label>
            </div>

          </div>










        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Describe your target audience for this brand:            <span>*</span>
        </label>
        <input type="text" name="audience" class="input required-inputs" maxlength="800">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="webUrl" class="formLabel">Website, storefront or listing URL:
        </label>
        <input type="text" class="input" maxlength="800" name="webUrl">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="avoid" class="formLabel">What to avoid?
        </label>
        <input type="text" name="avoid" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="additionalComment" class="formLabel">Additional comments:
        </label>
        <input type="text" class="input" maxlength="800" name="additionalComment">
      </div>
    </div>
  </div>
  <div class="sendRequest">
    <button class="sendrequestBtn btn-popup btndisable"> Send Request</button>
  </div>
  </form>
 @if(Session::has('message'))

    <div class="popupOpen" id="popup"  >
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
                  <a href="{{route('index')}}"><button class="get_now prising_btn close-popup">Close</button></a>
              </div>
          </div>

      </div>
  </div>
     <script>

      var btns = document.getElementsByClassName('btn-popup')
      var mdl = document.getElementById('popup');
      var clo = document.getElementsByClassName("close-popup")
      for (btn of btns) {
        btn.addEventListener('click', function() {
          mdl.style.display = "flex";
        })
        clo[0].addEventListener('click', function() {
          mdl.style.display = "none";
        });
      }
    </script>
  @endif
    <!-- <script src="https://kit.fontawesome.com/2c7577337a.js" crossorigin="anonymous"></script> -->
<script>

        var inputs = document.querySelectorAll(".required-inputs");
    var button = document.querySelector(".btndisable");
    button.disabled = true;
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener("input",checkInputs);
    }
    function checkInputs(){
var inputIsEmpty = false;
        for (let j = 0; j < inputs.length; j++) {
            if (inputs[j].value=="") {
                inputIsEmpty = true;
            }

    }
    if (inputIsEmpty) {
        console.log("button disabled");
        button.disabled = true;
    }else{
        console.log("button enabled");
        button.disabled = false;
    }
    }


</script>
</body>
<script src="{{asset('public/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('public/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('public/js/popper.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/js/ajax-form.js')}}"></script>
    <script src="{{asset('public/js/waypoints.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public/js/scrollIt.js')}}"></script>
    <script src="{{asset('public/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/js/wow.min.js')}}"></script>
    <script src="{{asset('public/js/nice-select.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/js/plugins.js')}}"></script>
    <script src="{{asset('public/js/gijgo.min.js')}}"></script>
    <script src="{{asset('public/js/main.js')}}"></script>
</html>
@include('layouts.footer')
