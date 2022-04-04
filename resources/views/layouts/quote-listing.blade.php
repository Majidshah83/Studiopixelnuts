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
    <form id="myForm" method="POST" action="{{ url('store-listing') }}" enctype="multipart/form-data">
    @csrf
    <div class="row mt-5">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <label for="fname" class="formLabel">Your name:<span>*</span> </label>
        <input type="text" name="fname" class="input" maxlength="800">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3 mt-md-0">
        <label for="surname" class="formLabel">Your surname:<span>*</span></label>
        <input type="text" name="surname" class="input" maxlength="800">
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

        <select name="payment" id="" class="formSelect">
          <option value="">Select</option>
          <option value="BankTransfer"> Bank Transfer
          </option>
          <option value="Paypal"> Paypal</option>
        </select>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="companyname" class="formLabel">Company name:<span>*</span></label>
        <input type="text" class="input" maxlength="800" name="companyname">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Address" class="formLabel">Address:<span>*</span></label>
        <input type="text" name="address" class="input" maxlength="800">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="City" class="formLabel"> City:<span>*</span></label>
        <input type="text" class="input" maxlength="800" name="city">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="Country" class="formLabel"> Country:<span>*</span></label>
        <input type="text" name="country" class="input" maxlength="800">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="zipcode" class="formLabel"> Zip code:<span>*</span></label>
        <input type="text" class="input" maxlength="800" name="zipcode">
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-3">
        <label for="email" class="formLabel"> Email:<span>*</span></label>
        <input type="text" name="email" class="input" maxlength="800">
      </div>
    </div>
    <h1 class="formHeading mt-4">
      Project details:
    </h1>
    <div class="row mt-3">

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">Upload all product photos or provide link to the folder to download it:*
            <span>*</span>
        </label>
        <input type="text" name="photos" class="input" maxlength="800">
        <label for="photosfile" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="photosfile" name="photos_file[]" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel"><h5 class="m-0 text-white">Image 1 - Main Image:
        </h5>  Design Inspiration: Describe this image and attach a reference to the design
            that you like, a reference from competitor or a sketch: <span> *</span> <br>

        </label>
        <input type="text" name="main" class="input" maxlength="800">
        <label for="mainfile" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="mainfile" name="main_file[]" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel"><h5 class="m-0 text-white">Image 2 :
        </h5>  Design Inspiration: Describe this image and attach a reference to the design
        that you like, a reference from competitor or a sketch: <span> *</span> <br>

        </label>
        <input type="text" name="competitor" class="input" maxlength="800">
        <label for="competitor" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="competitor" name="competitor_file[]" class="inpFile" multiple>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
            <span>*</span>
        </label>
        <input type="text" name="images" class="input" maxlength="800">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">If you’d like to use any stock photos in this image, provide links:

        </label>
        <input type="text" name="stock" class="input" maxlength="800">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel"><h5 class="m-0 text-white">Image 3 :
        </h5>  Design Inspiration: Describe this image and attach a reference to the design
        that you like, a reference from competitor or a sketch: <span> *</span> <br>

        </label>
        <input type="text" name="sketch" class="input" maxlength="800">
        <label for="sketch" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="sketch_file[]" id="sketch" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
            <span>*</span>
        </label>
        <input type="text" name="timage" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">If you’d like to use any stock photos in this image, provide links:
        </label>
        <input type="text" name="stock_image" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel"><h5 class="m-0 text-white">Image 4 :
        </h5>  Design Inspiration: Describe this image and attach a reference to the design
        that you like, a reference from competitor or a sketch:<span> *</span> <br>
        </label>
        <input type="text" name="design" class="input" maxlength="800">
        <label for="design" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="design_file[]" id="design" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
            <span>*</span>
        </label>
        <input type="text" name="text_image" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">If you’d like to use any stock photos in this image, provide links:
        </label>
        <input type="text" name="provide_image" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel"><h5 class="m-0 text-white">Image 5 :
        </h5>  Design Inspiration: Describe this image and attach a reference to the design
        that you like, a reference from competitor or a sketch:<span> *</span> <br>
        </label>
        <input type="text" name="reference" class="input" maxlength="800">
        <label for="reference" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="reference_file[]" id="reference" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
            <span>*</span>
        </label>
        <input type="text" name="audi_image" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">If you’d like to use any stock photos in this image, provide links:
        </label>
        <input type="text" name="link_image" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel"><h5 class="m-0 text-white">Image 6 :
        </h5> Design Inspiration: Describe this image and attach a reference to the design
        that you like, a reference from competitor or a sketch:<span> *</span> <br>
        </label>
        <input type="text" name="logo_image" class="input" maxlength="800">
        <label for="logo_image" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="logo_image" name="logo_image_file[]" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
            <span>*</span>
        </label>
        <input type="text" name="be_image" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">If you’d like to use any stock photos in this image, provide links:
        </label>
        <input type="text" name="any_image" class="input" maxlength="800">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="logoColor" class="formLabel"><h5 class="m-0 text-white">Image 7 :
        </h5>Design Inspiration: Describe this image and attach a reference to the design
        that you like, a reference from competitor or a sketch:<span> *</span> <br>
        </label>
        <input type="text" name="or_image" class="input" maxlength="800">
        <label for="or_image" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="or_image_file[]" id="or_image" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Text to be used in this image:
            <span>*</span>
        </label>
        <input type="text" name="image_tg" class="input" maxlength="800">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">If you’d like to use any stock photos in this image, provide links:
        </label>
        <input type="text" name="likeimage" class="input" maxlength="800">
      </div>
      </div>
      <h1 class="formHeading mt-4">
        Additional information:

      </h1>


<div class="row mt-4">

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">Your listing copy: <br>
            <i>In case that we need additional text for infographics.
            </i>
        </label>
        <input type="text" name="infographics" class="input" maxlength="800">
        <label for="infographics" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="infographics" name="infographics_file[]" class="inpFile" multiple>
      </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">If you’d like us to use your logo in listing images, attach it:
            <br>
            <i>The acceptable formats for logo are Ai, Eps or PDF (vector formats) or high resolution
                JPEG or PNG.
            </i>
        </label>
        <input type="text" name="vector" class="input" maxlength="800">
        <label for="vector" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="vector" name="vector_file[]" class="inpFile" multiple>
      </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="palette1" class="formLabel">Which colors would you like us to use for the graphic elements in your
            infographics/photo manipulation images?<br>
            <i>(Optional: Attach an image of color palette)

            </i>
        </label>
        <input type="text" name="palette" class="input required-inputs" maxlength="800">
        <label for="barcodeimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="palette_file[]" id="barcodeimg" class="inpFile required-inputs" multiple>
      </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">Which fonts would you like to use in your infographics/photo
            manipulation images? <br>
            <i>(Optional: Attach images of fonts that you like)
            </i>
        </label>
         <input type="text" name="info" class="input" maxlength="800">
        <label for="colorPackageimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" name="info_file[]" id="colorPackageimg" class="inpFile" multiple>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="tgAudienece" class="formLabel">Describe your target audience for this product:  <span>*</span>
        </label>
        <input type="text" name="target_image" class="input" maxlength="800">
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="visionFlogo" class="formLabel">If you have branding guide, please attach it:
        </label>
        </label>
        <input type="text" name="guidei" class="input" maxlength="800">
        <label for="fontPackageimg" class="inpimg"><i class="fas fa-image"></i></label> <input type="file" id="fontPackageimg" name="guidei_file[]" class="inpFile" multiple>
      </div>

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="webUrl" class="formLabel">Website, storefront or listing URL:

        </label>
        <input type="text" class="input" maxlength="800" name="webUrl">
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
        <label for="webUrl" class="formLabel">Your top competitors:
        </label>
        <input type="text" class="input" maxlength="800" name="topcompetitor">
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
    <button class="sendrequestBtn btn-popup"> Send Request</button>
  </div>
</form>
    <div class="popup" id="popup"  >
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
  </div>
    <!-- <script src="https://kit.fontawesome.com/2c7577337a.js" crossorigin="anonymous"></script> -->
    <script>
      var btns = document.getElementsByClassName('btn-popup')
      var mdl = document.getElementById('popup');
      var clo = document.getElementsByClassName("close-popup")
      for (btn of btns) {
        btn.addEventListener('click', function() {
          mdl.style.display = "flex";
        })
        // document.body.addEventListener('click', function() {
        //   mdl.style.display = "none";
        // });
        clo[0].addEventListener('click', function() {
          mdl.style.display = "none";
        });
      }



      window.addEventListener('mouseup', function(event){
var box = document.getElementById('popup');
if(event.target == box){
  box.style.display = 'none';
}
  });


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
