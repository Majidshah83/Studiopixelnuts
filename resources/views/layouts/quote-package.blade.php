
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
@include('layouts.header')
  <div class="formSection">
    <h1 class="formHeading">
      In order to get started, please fill out information below:
    </h1>
     <form id="myForm" method="POST" action="{{route('package_form_store')}}" enctype="multipart/form-data">
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

        <select name="payment" id="" class="formSelect required-inputs" required>
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
        <input type="text" name="address" class="input required-inputs" maxlength="800" required>
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
        <input type="text" class="input required-inputs" maxlength="800" name="zipcode"required>
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
        <label for="productName" class="formLabel">Product name:<span>*</span>
        </label>
        <input type="text" class="input required-inputs" maxlength="800" name="productName" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="productShortDesc" class="formLabel">A short description of the product:<span>*</span>
        </label>
        <input type="text" class="input required-inputs" maxlength="800" name="productShortDesc" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="typeOfPackage" class="formLabel">Which type of packaging do you need?:<span>*</span> <br>
            <i>Example: Box, Bag, Label, etc... </i>
        </label>
        <input type="text" class="input required-inputs" maxlength="800" name="typeOfPackage" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="picOfPackage" class="formLabel">If you have a picture of your packaging (taken with mobile or example from  google), attach it:
        </label>
        <input type="text" name="picOfPackage" class="input required-inputs" maxlength="800" required>
        <label for="attachPackagePic" class="inpimg required"><i class="fas fa-image"></i></label> <input type="file" id="attachPackagePic" name="pic_file[]" class="inpFile required-inputs"  multiple required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="sizeOfPackaging" class="formLabel">What is the size of your packaging? Attach your dielines.<span>*</span>
            <br>
          <i>You can ask your supplier or printing company to send you your dielines.   </i> <br>
          <i>The acceptable formats for dielines are Ai, PDF or EPS.    </i>
        </label>
        <input type="text" name="sizeOfPackagingimg" class="input required-inputs" maxlength="800" required>
        <label for="sizeOfPackaging" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="sizeOfPackaging" name="size_file[]" class="inpFile inpimg" multiple>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="attachPackageDesign" class="formLabel">Design Inspiration: Attach references to the designs that you like so that <br>
            we can understand which direction you would like us to go in:<span>*</span>
        </label>
        <input type="text" name="attachPackageDesign" class="input required-inputs" maxlength="800" required>
        <label for="attachPackageDesignimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="design_file[]" id="attachPackageDesignimg" class="inpFile" multiple>
      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="attachLogo" class="formLabel">Logo: Attach your logo in Ai, Eps or PDF (vector formats) or high resolution
            JPEG or PNG: <br>
        <i>
            In case we’re working on your logo design, leave this section blank. If not, this section is
required.
        </i>
        </label>
        <input type="text" name="attachLogo" class="input" maxlength="800" required>

        <label for="attachLogoimg" class="inpimg"><i class="fas fa-image"></i></label>  <input type="file" name="slogofiles[]" id="attachLogoimg" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="packageText" class="formLabel">Text to be used in packaging design: Write down or attach a word
            document with the text that you want used in the package design. <span>*</span> <br>
        <i>
            Be sure to divide it into sections: Front side, Back side, Top, Bottom, Sides.
        </i>
        </label>
        <input type="text" name="packageText" class="input" maxlength="800" required>
        <label for="packageTextimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="packageTextimg" name="packageTextfile[]" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="attachPackageimages" class="formLabel">Images: Attach images that you want us to use in your package design.
            The images you provide should be in high resolution. If your packaging
            is supposed to contain stock images, include links:

        </label>
        <input type="text" name="attachPackageimages" class="input" maxlength="800" required>
        <label for="attachPackageimagesimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="attachPackagefile[]" id="attachPackageimagesimg" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="colorPackage" class="formLabel">Which colors would you like us to use in your package design? <br>
            <i>
                (Optional: Attach an image of color palette)
            </i>

        </label>
        <input type="text" name="colorPackage" class="input" maxlength="800" required>
        <label for="colorPackageimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="colorPackagefile[]" id="colorPackageimg" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="fontPackage" class="formLabel">Which fonts would you like to use in your package design?
            <br>
            <i>
                (Optional: Attach images of fonts that you like)
            </i>

        </label>
        <input type="text" name="fontPackage" class="input" maxlength="800" required>
        <label for="fontPackageimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="fontPackagefile[]" id="fontPackageimg" class="inpFile" multiple>
      </div>




      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="includeWebsite" class="formLabel">Do you want to include your website and social media pages in your
            package design? If yes, mention all of them:


        </label>
        <input type="text" name="includeWebsite" class="input" maxlength="800" required>

      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="barcode" class="formLabel">Barcode: Attach your barcode (FNSKU for products that are going to be
            sold on Amazon): <span>*</span>


        </label>
        <input type="text" name="barcode" class="input required-inputs" maxlength="800" required>
        <label for="barcodeimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="barcodefile[]" id="barcodeimg" class="inpFile" multiple>
      </div>



      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="productManufacture" class="formLabel">Where is the product manufactured? <span>*</span>


        </label>
        <input type="text" name="productManufacture" class="input required-inputs" maxlength="800" required>

      </div>


      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="certificationsORwarning" class="formLabel">Are there any certifications or warning labels that your packaging must include?
          <br>
          <i>
            For example: age recommendations, choking hazard, contains lithium batteries, allergies, etc...
            Write down the list or attach images.
          </i>


        </label>
        <input type="text" name="certificationsORwarning" class="input" maxlength="800" required>
        <label for="certifications" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="certificationsORwarninfile[]" id="certifications" class="inpFile" multiple>
      </div>




      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3 ">
        <p class="formLabel mb-2">
          Creative vision: How do you see your logo design?
        </p>

        <div class="checkboxDiv">

          <div class="checkBoxCol">
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="classicCb" name="classic" class="hidden-xs-up cbx1">
                <label for="classicCb" class="cbx"></label>
              </div>
              <label for="classicCb" class="formLabel m-0">Classic</label>
            </div>
            <div class="Checkbox">
              <div class="cntr">
                <input type="checkbox" id="MatureCb" name="mature" class="hidden-xs-up cbx1">
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
                <input type="checkbox" id="modernCb" name="modern" class="hidden-xs-up cbx1">
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
        <label for="webUrl" class="formLabel">Website, storefront or listing URL:
        </label>
        <input type="text" class="input" maxlength="800" name="webUrl" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="avoid" class="formLabel">What to avoid?
        </label>
        <input type="text" name="avoid" class="input" maxlength="800" required>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="additionalComment" class="formLabel">Additional comments:
        </label>
        <input type="text" class="input" maxlength="800" name="additionalComment" required>
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
