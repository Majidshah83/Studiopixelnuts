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

    <form id="myForm" method="POST" action="{{ url('store-listing2') }}" enctype="multipart/form-data">
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
        <input type="text" name="hearaboutservices" class="input required-inputs" maxlength="800">
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
        <label for="visionFlogo" class="formLabel">Upload all product photos or provide link to the folder to download it:<span>*</span>
        </label>
        <input type="text" name="photo" class="input required-inputs" maxlength="800">
        <label for="attachlogodesign" class="inpimg required-inputs required"><i class="fas fa-image"></i></label> <input type="file" name="photo_file[]" id="attachlogodesign" class="inpFile required-inputs" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Product name and description :<span>*</span>
        </label>
        <input type="text" name="tgAudienece" class="input required-inputs" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel">All product details (features, benefits, ingredients, materials, etc).
            If you have a copy for listing (title, bullet points, description) written in
            word document, please attach it as well: <span>*</span>
        </label>
        <input type="text" name="benefit" class="input required-inputs" maxlength="800">
        <label for="logocolorimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="benefit_file[]" id="logocolorimg" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">How does your product work? Are there any special care instructions?* <span>*</span>            <br>
          <i>Optional: Attach manual or instructions, or send us a link of the video tutorial.
          </i>
        </label>
        <input type="text" name="manual" class="input required-inputs" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="manual_file[]" id="logofontimg" class="inpFile" multiple>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">A list of anything that makes your product unique or stand out from
            the competition:
        </label>
        <input type="text" name="unique" class="input" maxlength="800">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Is your product giftable? If so, who can buy it as a gift?
        </label>
        <input type="text" name="giftable" class="input" maxlength="800">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Do you have product packaging print ready file in Ai, Eps or PDF format?
            If so, please attach it. If not, ask your designer to send you.
        </label>
        <input type="text" name="ready" class="input" maxlength="800">
        <label for="input-id-id" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="ready_file[]" id="input-id-id" class="inpFile" multiple>
      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Does your product come with a product manual or instructions?
            If so, please attach it:
        </label>
        <input type="text" name="product" class="input" maxlength="800">
        <label for="input-id" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="product_file[]" id="input-id" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">If the listing for this product is currently live, provide a link:

        </label>
        <input type="text" name="currently" class="input" maxlength="800">

      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">If you sell other products under this brand, provide links to your best
            selling products or your storefront:
        </label>
        <input type="text" name="under" class="input" maxlength="800">

      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3 ">
        <p class="formLabel mb-2">
            How would you describe your brand?

        </p>

        <div class="checkboxDiv">

          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="classicCb" name="luxury" class="hidden-xs-up cbx1">
                <label for="classicCb" class="cbx"></label>
              </div>
              <label for="classicCb" class="formLabel m-0">Luxury</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="MatureCb" name="expensive" class="hidden-xs-up cbx1">
                <label for="MatureCb" class="cbx"></label>
              </div>
              <label for="MatureCb" class="formLabel m-0">Expensive</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="PlayfulCb" name="playful" class="hidden-xs-up cbx1">
                <label for="PlayfulCb" class="cbx"></label>
              </div>
              <label for="PlayfulCb" class="formLabel m-0">Playful</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="FeminineCb" name="feminine" class="hidden-xs-up cbx1">
                <label for="FeminineCb" class="cbx"></label>
              </div>
              <label for="FeminineCb" class="formLabel m-0">Feminine</label>
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
                <input type="checkbox" id="YouthfulCb" name="economic" class="hidden-xs-up cbx1">
                <label for="YouthfulCb" class="cbx"></label>
              </div>
              <label for="YouthfulCb" class="formLabel m-0">Economic</label>
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
        <label for="tgAudienece" class="formLabel">What is your product's price point in comparison to the competition - higher,
            lower, or in the middle? And why?
        </label>
        <input type="text" name="comparison" class="input" maxlength="800">
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Attach your logo:
<br>  <i>
    The acceptable formats for logo are Ai, Eps or PDF (vector formats) or high resolution
JPEG or PNG.
</i>
        </label>
        <input type="text" name="high" class="input" maxlength="800">
        <label for="input-id-2" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="high_file[]" id="input-id-2" class="inpFile" multiple>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Are there any specific color codes and fonts that your brand is using?

<br>  <i>
    (Optional: Attach branding guide)
</i>
        </label>
        <input type="text" name="specific" class="input" maxlength="800">
        <label for="input-id-3" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="input-id-3" name="specific_file[]" class="inpFile" multiple>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Describe your target audience for this product: <span>*</span>
        </label>
        <input type="text" name="targete" class="input required-inputs" maxlength="800">

      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="webUrl" class="formLabel">Your top competitors:

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
