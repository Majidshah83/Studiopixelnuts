  @extends('layouts.master')
  @section('content')
<!-- porfolio -->
    <div class="prising_area" style="padding-top: 120px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>Logo Design</h3>
              <p>Memorable, marketable brands win on Amazon. We’ll create a logo that’s strong, simple, and versatile to effectively communicate your company’s identity and introduce customers to what makes your brand special.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-top-border">
        <div class="row gallery-item">
          <div class=" col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url('{{ asset('img/gallery/logo_1.jpg')}}'"></div>
            </a>
          </div>
          <div class=" col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url('{{ asset('img/gallery/logo_2.jpg')}}'"></div>
            </a>
          </div>
          <div class=" col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url('{{ asset('img/gallery/logo_3.jpg')}}'"></div>
            </a>
          </div>
          <div class=" col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url('{{ asset('img/gallery/logo_4.jpg')}}'"></div>
            </a>
          </div>
          <div class=" col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url('{{ asset('img/gallery/logo_5.jpg')}}';"></div>
            </a>
          </div>
          <div class=" col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url('{{ asset('img/gallery/logo_6.jpg')}}';"></div>
            </a>
          </div>
        </div>

        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">

            <div class="mySlides">
              <div class="numbertext">1 / 4</div>
              <img src="{{asset('img/gallery/logo_1.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 4</div>
              <img src="{{asset('img/gallery/logo_2.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img src="{{asset('img/gallery/logo_3.jpg')}}" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img src="{{asset('img/gallery/logo_4.jpg')}}" style="width:100%">
            </div>
            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img src="{{asset('img/gallery/logo_5.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 4</div>
              <img src="{{asset('img/gallery/logo_6.jpg')}}">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
        </div>
      </div>
    </div>



    <!--Package Design-->
    <div class="prising_area" style="padding-top: 50px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>Package Design</h3>
              <p>Packaging that pops can make all the difference in a marketplace as vast as Amazon. Be sure your product stands out from the crowd with compelling package designs that showcase what’s unique about your brand.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-top-border">

        <div class="row gallery-item">
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Package_1.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Package_2.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Package_3.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Package_4.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Package_5.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Package_6.jpg);"></div>
            </a>
          </div>

        </div>
      </div>
    </div>


    <!--Inser Cards Design-->
    <div class="prising_area" style="padding-top: 50px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>Insert Cards</h3>
              <p>Whether you want to thank your customers for purchase, introduce them to your line of products, or help them
                understand how to use the product - you can create a double sided insert, bi-fold or tri-fold brochure and surprise
                them when they open the packaging.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-top-border">

        <div class="row gallery-item">
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Insert_1.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Insert_2.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Insert_3.jpg);"></div>
            </a>
          </div>


        </div>
      </div>
    </div>

    <!--Product Infographics-->
    <div class="prising_area" style="padding-top: 50px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>Listing Images</h3>
              <p>Want to give your customers the confidence that your product is right for them? Highlight standout features, enticing benefits, and crucial differentiators with easy-to-understand infographics that communicate your message quickly
                and clearly.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-top-border">
        <div id="carouselExampleControls" class="carousel slide gallery_carousel" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/gallery/Listing_1.jpg" alt="" onclick="openModal2();currentSlide2(1)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_2.jpg" alt="" onclick="openModal2();currentSlide2(2)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_3.jpg" alt="" onclick="openModal2();currentSlide2(3)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_4.jpg" alt="" onclick="openModal2();currentSlide2(4)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_5.jpg" alt="" onclick="openModal2();currentSlide2(5)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_6.jpg" alt="" onclick="openModal2();currentSlide2(6)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_7.jpg" alt="" onclick="openModal2();currentSlide2(7)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_8.jpg" alt="" onclick="openModal2();currentSlide2(8)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_9.jpg" alt="" onclick="openModal2();currentSlide2(9)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_10.jpg" alt="" onclick="openModal2();currentSlide2(10)">
            </div>
            <div class="carousel-item">
              <img src="img/gallery/Listing_11.jpg" alt="" onclick="openModal2();currentSlide2(11)">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div id="myModal2" class="modal">
          <span class="close cursor" onclick="closeModal2()">&times;</span>
          <div class="modal-content">

            <div class="mySlides2">

              <img src="img/gallery/Listing_1.jpg" style="width:100%">
            </div>

            <div class="mySlides2">

              <img src="img/gallery/Listing_2.jpg" style="width:100%">
            </div>

            <div class="mySlides2">

              <img src="img/gallery/Listing_3.jpg" style="width:100%">
            </div>
            <div class="mySlides2">

              <img src="img/gallery/Listing_4.jpg" style="width:100%">
            </div>
            <div class="mySlides2">

              <img src="img/gallery/Listing_5.jpg" style="width:100%">
            </div>

            <div class="mySlides2">

              <img src="img/gallery/Listing_6.jpg">
            </div>
            <div class="mySlides2">

              <img src="img/gallery/Listing_7.jpg">
            </div>
            <div class="mySlides2">

              <img src="img/gallery/Listing_8.jpg">
            </div>
            <div class="mySlides2">

              <img src="img/gallery/Listing_9.jpg">
            </div>
            <div class="mySlides2">

              <img src="img/gallery/Listing_10.jpg">
            </div>
            <div class="mySlides2">

              <img src="img/gallery/Listing_11.jpg">
            </div>

            <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides2(1)">&#10095;</a>
          </div>
        </div>





      </div>
    </div>





    <!--Inser Cards Design-->
    <div class="prising_area" style="padding-top: 50px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>A+ Content</h3>
              <p>If you're brand registered and you don't have A+ content yet, you're missing out! A+ content is a great way to add
                additional information and lifestyle images you couldn't fit into main 7 images and to show your customers that
                your product is exactly what they need.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-top-border">

        <div class="row gallery-item">
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image ll" style="background: url(img/gallery/EBC_1.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a>
              <div class="single-gallery-image ll" style="background: url(img/gallery/EBC_2.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image ll" style="background: url(img/gallery/EBC_3.jpg);"></div>
            </a>
          </div>


        </div>
      </div>
    </div>

    <!--Hero Images-->
    <div class="prising_area" style="padding-top: 50px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>Hero Images</h3>
              <p>Striking visuals can make or break your Amazon listing. We can help you showcase your product, make a stunning impact, and convert clicks into customers with attention-grabbing main image that sell.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-top-border">

        <div class="row gallery-item">

          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Hero_1.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Hero_2.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Hero_3.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Hero_4.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Hero_5.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Hero_6.jpg);"></div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!--White Background Images Images-->
    <div class="prising_area" style="padding-top: 50px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>White Background Images</h3>
              <p>Put the spotlight on what makes your product special. Our clean, professional, high-quality photos of your product against a crisp white background help give your customers clarity and capture even the smallest, most important
                details.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-top-border">

        <div class="row gallery-item">
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/WB_1.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/WB_2.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/WB_3.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/WB_4.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/WB_5.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/WB_6.jpg);"></div>
            </a>
          </div>

        </div>
      </div>
    </div>

    <!--Lifestyle Images-->
    <div class="prising_area" style="padding-top: 50px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
              <h3>Lifestyle Images</h3>
              <p>Show your customers how your product fits into their lifestyle, authentically. Our lifestyle images will incorporate your product into relevant places and spaces that help your customers envision why it’s a must-buy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-bottom: 70px;">
      <div class="section-top-border">

        <div class="row gallery-item">

          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Lifestyle_1.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Lifestyle_2.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Lifestyle_3.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Lifestyle_4.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Lifestyle_5.jpg);"></div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mx-auto">
            <a>
              <div class="single-gallery-image" style="background: url(img/gallery/Lifestyle_6.jpg);"></div>
            </a>
          </div>

        </div>
      </div>
    </div>


    <!--/ portfolio -->
 <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }
  </script>



  <script>
    function openModal2() {
      document.getElementById("myModal2").style.display = "block";
    }

    function closeModal2() {
      document.getElementById("myModal2").style.display = "none";
    }

    var slideIndex2 = 1;
    showSlides2(slideIndex2);

    function plusSlides2(n) {
      showSlides2(slideIndex2 += n);
    }

    function currentSlide2(n) {
      showSlides2(slideIndex2 = n);
    }

    function showSlides2(n) {
      var i;
      var slides2 = document.getElementsByClassName("mySlides2");
      var dots2 = document.getElementsByClassName("demo");
      var captionText2 = document.getElementById("caption");
      if (n > slides2.length) {
        slideIndex2 = 1
      }
      if (n < 1) {
        slideIndex2 = slides2.length
      }
      for (i = 0; i < slides2.length; i++) {
        slides2[i].style.display = "none";
      }
      for (i = 0; i < dots2.length; i++) {
        dots2[i].className = dots2[i].className.replace(" active", "");
      }
      slides2[slideIndex2 - 1].style.display = "flex";
      dots2[slideIndex2 - 1].className += " active";
      captionText2.innerHTML = dots2[slideIndex2 - 1].alt;
    }
  </script>
@stop


