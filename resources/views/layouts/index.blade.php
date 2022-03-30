  @extends('layouts.master')
  @section('content')
  <!-- GREAT IMAGE -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-4">
                        <div class="slider_text ">
                            <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" >GREAT  <br>IMAGE </h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">is the silent seller</p>
                            <div class="video_service_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <a href="{{url('price')}}" class="boxed-btn3">See Our Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">

                        <div class="phone_thumb wow fadeInDown" data-wow-duration="1.1s" data-wow-delay=".2s">
                            <img src="public/img/main/main_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END GREAT IMAGE -->




    <!-- Who We Are & What we offer -->
    <div class="service_area" style="padding: 60px 0 10px 0;">
        <div class="container">
            <div class="row" id="who_we_are">
                <div class="col-xl-12">
                    <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <a class="anchor" id="who"></a>
                        <h3>Who We Are</h3>
                        <p>When it comes to winning over your customers, image is everything - and at PixelNuts Studio, we’re crazy about creating impactful, eye-catching visuals that sell. We’re a small but mighty team with experience of over a decade in graphic design and photography. We have worked with hundreds of sellers and we are proud to be part of their Amazon journey and help them visually communicate with their customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service_area" id="services" style="padding: 60px 0 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <h3>Our Services</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                        <div class="single_service text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                            <a href="{{url('price#graphic_design')}}" >
                                <div class="thumb">
                                    <img src="public/img/main/graph_design.png" alt="" style="padding-top: 3%; max-width: 220px; max-height: 220px;">
                                    <h4>GRAPHIC <br>DESIGN </h4>
                                </div>
                            </a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4">

                            <div class="single_service text-center wow fadeInUp " data-wow-duration=".8s" data-wow-delay=".6s">
                              <a href="{{url('price#product_photography')}}" >
                                <div class="thumb">
                                    <img src="public/img/main/product_photo.png" alt="" style="padding-top: 3%; max-width: 220px; max-height: 220px;">
                                    <h4>PRODUCT <BR>PHOTOGRAPHY</h4>
                                </div>
                              </a>
                            </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                            <div class="thumb">
                                <img src="public/img/main/Coming-Soon.png" alt="" style="padding-top: 3%; max-width: 220px; max-height: 220px;">
                                <h4>VIDEO <BR>SERVICES</h4>
                            </div>
                    </div>
            </div> -->
            </div>
        </div>
    </div>
    <!--END Who We Are & What we offer  -->



    <!-- Product Photography Steps  -->
    <div class="service_area_2">
           <div class="container">
            <div class="row align-items-center">
            <div class="service_content_wrap">
                <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" style="padding-bottom: 30px;">
                    <h3>Product Photography Steps</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" style="background-color: #ececee;">
                            <span style="font-size: 2em; font-weight: 700; color: #5f378d; padding: 0 5% 0 5%;">01</span>
                            <h3 style="padding: 0 5% 0 5%;">Fill out a brief </h3>
                            <p style="padding: 0 5% 5% 5%;">Please fill out a brief from the pricing section, explain precisely what you want to have in each image and send us your word file on email. During this stage we will be discussing everything in detail to make sure that the project runs smoothly and has a successful outcome.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" style="background-color: #ececee;" >
                            <span style="font-size: 2em; font-weight: 700; color: #5f378d; padding: 0 5% 0 5%;">02</span>
                            <h3 style="padding: 0 5% 0 5%;">Send us your product </h3>
                            <p style="padding: 0 5% 5% 5%;">Once you confirm your order with us, we will email you our physical address in Novi Sad, Serbia,  so you could send us your 2 new, production quality samples. We do not accept samples with defects. We require upfront payment to start the initial production process and cover the production costs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" style="background-color: #ececee;">
                            <span style="font-size: 2em; font-weight: 700; color: #5f378d; padding: 0 5% 0 5%;">03</span>
                            <h3 style="padding: 0 5% 0 5%;">Receive your images </h3>
                            <p style="padding: 0 5% 5% 5%;">When we receive your product, we need 10-15 days (depending on the plan you chose) to complete your project. Once your project is completed, we will email you the link, where you can download your images.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Product Photography Steps  -->
 @stop
