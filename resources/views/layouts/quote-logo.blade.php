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
     <br>

    <h1 class="formHeading">
      In order to get started, please fill out information below:
    </h1>
  <form id="myForm" method="POST" action="{{ url('formstore') }}" enctype="multipart/form-data">
        @csrf
    <div class="row mt-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="fname" class="formLabel">Your name:<span>*</span> </label>
        <input type="text" name="fname" class="input required-inputs" maxlength="800" required>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3 mt-md-0">
        <label for="surname" class="formLabel">Your surname:<span>*</span></label>
        <input type="text" name="surname" class="input required-inputs" maxlength="800" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
        <label for="hearaboutservices" class="formLabel">How did you hear about our services?
        </label>
        <input type="text" name="hearaboutservices" class="input" maxlength="800" required>
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

        <select name="payment"  id="" class="formSelect required-inputs" required>
          <option value="">Select</option>
          <option value="BankTransfer"> Bank Transfer
          </option>
          <option value="Paypal"> Paypal</option>
        </select>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="companyname" class="formLabel">Company name:<span>*</span></label>
        <input type="text" class="input required-inputs" maxlength="800" name="companyname" required>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Address" class="formLabel">Address:<span>*</span></label>
        <input type="text" name="address" class="input required-inputs" maxlength="800">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="City" class="formLabel"> City:<span>*</span></label>
        <input type="text" class="input required-inputs" maxlength="800" name="city" required>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Country" class="formLabel"> Country:<span>*</span></label>
        <input type="text" name="country" class="input required-inputs" maxlength="800" required>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="zipcode" class="formLabel"> Zip code:<span>*</span></label>
        <input type="text" class="input required-inputs" maxlength="800" name="zipcode" required>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="email" class="formLabel"> Email:<span>*</span></label>
        <input type="text" name="email" class="input required-inputs" maxlength="800" required>
      </div>
    </div>
    <h1 class="formHeading mt-4">
      Project details:
    </h1>
    <div class="row mt-3">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2">
        <label for="nameIncorporatedLogo" class="formLabel">The name you want incorporated into the logo:<span>*</span>
        </label>
        <input type="text" class="input required-inputs" maxlength="800" name="nameIncorporatedLogo" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="sloganIncorporatedLogo" class="formLabel">The slogan you want incorporated into the logo (Optional):
        </label>
        <input type="text" class="input" maxlength="800" name="sloganIncorporatedLogo">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="descLogo" class="formLabel">A short description of the logo:<span>*</span>
        </label>
        <input type="text" class="input required-inputs" maxlength="800" name="descLogo" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="listDescOfProducts" class="formLabel">A list and description of products that will be sold under this brand name:<span>*</span>
        </label>
        <input type="text" class="input required-inputs" maxlength="800" name="listDescOfProducts">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">Describe your vision for the logo design and attach designs that
          you like as inspiration:<span>*</span>
        </label>
        <input type="text" name="visionFlogoName"  class="input required-inputs" maxlength="800" required>
        <label for="attachlogodesign" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="attachlogodesign" name="visionFlogo[]" class="inpFile required-inputs" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel">Which colors would you like us to use in your logo design? <br>
          <i>(Optional: Attach an image of color palette)</i>
        </label>
        <input type="text" name="logoColorName" class="input" maxlength="800">
        <label for="logocolorimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logocolorimg" name="logoColor[]" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoFont" class="formLabel">Which fonts would you like to use in your logo design?<br>
          <i>(Optional: Attach images of fonts that you like)
          </i>
        </label>
        <input type="text" name="logoFontName" class="input" maxlength="800">
        <label for="logofontimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logofontimg" name="logoFont[]" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3 ">
        <p class="formLabel mb-2">
          Creative vision: How do you see your logo design?
        </p>

        <div class="checkboxDiv">

          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="classicCb" name="interests" class="hidden-xs-up cbx1">
                <label for="classicCb" class="cbx"></label>
              </div>
              <label for="classicCb" class="formLabel m-0">Classic</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="MatureCb" name="modern" class="hidden-xs-up cbx1">
                <label for="MatureCb" class="cbx"></label>
              </div>
              <label for="MatureCb" class="formLabel m-0">Mature</label>
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
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="SensibleCb" name="sensible" class="hidden-xs-up cbx1">
                <label for="SensibleCb" class="cbx"></label>
              </div>
              <label for="SensibleCb" class="formLabel m-0">Sensible</label>
            </div>
          </div>
          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="modernCb" name="modern1" class="hidden-xs-up cbx1">
                <label for="modernCb" class="cbx"></label>
              </div>
              <label for="modernCb" class="formLabel m-0">Modern</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="YouthfulCb" name="youthful" class="hidden-xs-up cbx1">
                <label for="YouthfulCb" class="cbx"></label>
              </div>
              <label for="YouthfulCb" class="formLabel m-0">Youthful</label>
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
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="LuxuriousCb" name="luxurious" class="hidden-xs-up cbx1">
                <label for="LuxuriousCb" class="cbx"></label>
              </div>
              <label for="LuxuriousCb" class="formLabel m-0">Luxurious</label>
            </div>
        </div>

        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Describe your target audience:<span>*</span>
        </label>
        <input type="text" name="tgAudienece" class="input required-inputs" maxlength="800" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="brandStory" class="formLabel">Your brand story (If it's in PDF form, please attach it):
        </label>
        <textarea name="brandStoryName" rows="6" cols="80" class="input" maxlength="2000"></textarea>
        <!-- <input type="text" name="brandStory" class="input" maxlength="2000"> -->
        <label for="brandstoryimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="brandstoryimg" name="brandStory[]" class="inpFile" multiple>
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



//       window.addEventListener('mouseup', function(event){
// var box = document.getElementById('popup');
// if(event.target == box){
//   box.style.display = 'none';
// }



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

</html>
@include('layouts.footer')
