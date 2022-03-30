@extends('layouts.master')
@section('content')
 <!-- prising_area  -->
    <div class="prising_area" style="padding-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <a class="anchor1" id="Graphic"></a>
                    <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                        <h3>Graphic Design Services</h3>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit sed do eiusmod <br> tempor incididunt.</p>-->
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp min-h-sm" data-wow-duration=".7s" data-wow-delay=".8s">
                        <div class="prising_header d-flex flex-column justify-content-center">
                            <h3 style="color: #fff;">LOGO DESIGN</h3>


                            <span>Starts From $280</span>
                        </div>
                        <ul>
                            <li> <img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">2 Initial Concepts</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">3 Minor Revisions</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Final Files: Ai, PDF, PNG, JPG</li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;">Branding Guide
                            </li>
                            <!-- <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> Commercial Use</li> -->
                        </ul>
                        <div class="prising_bottom">
                          <button class="get_now prising_btn logoDesignPopup">I need this!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp min-h-sm" data-wow-duration=".6s" data-wow-delay=".7s">
                        <div class="prising_header d-flex flex-column justify-content-center pink_header">
                            <h3 style="color: #fff;">PACKAGE DESIGN</h3>
                            <span>Starts from $340
                            </span>
                        </div>
                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">1 Initial Concept</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">3 Minor Revisions
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Print Ready Files: Ai, PDF
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">High Resolution Mockup</li>
                            <!-- <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;"> High Resolution Mockup</li> -->
                        </ul>
                        <div class="prising_bottom">
                            <button class="get_now prising_btn packageDesignPopupbtn">i need this!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp min-h-sm" data-wow-duration=".6s" data-wow-delay=".6s">
                        <div class="prising_header d-flex flex-column justify-content-center pink_header">
                            <h3 style="color: #fff;">INSERT CARD</h3>
                            <span>Starts from $140
                            </span>
                        </div>

                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Choose Between Double
                                Sided, Bi-Fold and Tri-Fold</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">1 Initial Concept
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">3 Minor Revisions
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Print Ready Files: Ai, PDF</li>
                            <!-- <li><img src="public/img/main/mark1.svg" style="width: 15px;"> Print Ready Files: Ai, PDF</li> -->
                        </ul>
                        <div class="prising_bottom">
                            <button class="get_now prising_btn btn-popup">i need this!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp min-h-sm" data-wow-duration=".7s" data-wow-delay=".8s">
                        <div class="prising_header d-flex flex-column justify-content-center green_header">
                            <h3 style="color: #fff;">LISTING IMAGES</h3>
                            <span>Starts from $450
                            </span>
                        </div>
                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">7 Listing Images
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Infographic/Manipulation</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">3 Minor Revisions</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">High Resolution Images</li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;">Stock Images</li>
                        </ul>
                        <div class="prising_bottom">
                            <button class="get_now prising_btn btn-popup">i need this!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp min-h-sm" data-wow-duration=".7s" data-wow-delay=".7s">
                        <div class="prising_header d-flex flex-column justify-content-center green_header">
                            <h3 style="color: #fff;">A+ CONTENT</h3>
                            <span>Starts from $350
                            </span>
                        </div>
                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Option With and Without
                                Copywriting</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">5 Modules
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">1 Concept
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Infographic/Manipulation</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">3 Minor Revisions</li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;">Stock Images
                            </li>
                        </ul>
                        <div class="prising_bottom">
                            <button class="get_now prising_btn btn-popup">i need this!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp min-h-sm" data-wow-duration=".7s" data-wow-delay=".6s">
                        <div class="prising_header d-flex flex-column justify-content-center green_header ">
                            <h3 style="color: #fff;">STOREFRONT DESIGN</h3>
                            <span>Starts from $480</span>
                        </div>
                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Option With and Without
                                Copywriting</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Basic 2 Pages
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Between 6-8 Images
                                in Total
                                </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">3 Minor Revisions
                            </li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;">Stock Images</li>
                        </ul>
                        <div class="prising_bottom">
                            <button class="get_now prising_btn btn-popup">i need this!</button>
                        </div>
                    </div>




                </div>
                <div class="col-xl-12 col-md-12" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".6s">
                        <div class="prising_header justify-content-between green_header">
                            <h3 style="color: #fff;">ADDITIONAL PRICING</h3>
                            <span></span>
                        </div>
                        <!-- <p style="padding-top: 1.2em; font-weight: 600;">Print:</p> -->
                        <ul>
                            <li style="text-align: center; padding-left: 0px">Insert Card Double-Sided
                                <span
                                    style="color:#5f378d; font-weight:700"> $140

                                </span></li>
                            <li style="text-align: center; padding-left: 0px">Insert Card Bi-Fold <span style="color:#5f378d; font-weight:700"> $200</span></li>
                            <li style="text-align: center; padding-left: 0px">Insert Card Tri-Fold
                                <span style="color:#5f378d; font-weight:700">$260</span>
                            </li>
                            <li style="text-align: center; padding-left: 0px">A+ Content - 5 Modules/Design Only <span
                                    style="color:#5f378d; font-weight:700">$350</span></li>
                            <li style="text-align: center; padding-left: 0px">A+ Content - 5 Modules/Design, Copywriting & Wireframe  <span
                                    style="color:#5f378d; font-weight:700">$820</span></li>
                        </ul>
                        <ul>
                            <li style="text-align: center; padding-left: 0px">Storefront Design - Basic 2 Pages/Design Only
                                <span
                                    style="color:#5f378d; font-weight:700">  $480

                                </span></li>

                            <li style="text-align: center; padding-left: 0px">Storefront Design - Basic 2 Pages/Design, Copywriting & Wireframe <span
                                    style="color:#5f378d; font-weight:700">$880</span></li>
                        </ul>
                        <!-- <p style="padding-top: 1.2em; font-weight: 600;">Amazon Listing:</p> -->
                        <ul>
                            <li style="text-align: center; padding-left: 0px">Additional Listing Image <span
                                    style="color:#5f378d; font-weight:700">$70</span></li>
                            <li style="text-align: center; padding-left: 0px">Stock Image <span
                                    style="color:#5f378d; font-weight:700">$10/per image</span></li>
                            <li style="text-align: center; padding-left: 0px">Brief for Listing Images <span
                                    style="color:#5f378d; font-weight:700">$350</span></li>
                            <li style="text-align: center; padding-left: 0px">Consultation Call <span
                                    style="color:#5f378d; font-weight:700"> $80/30mins</span></li>
                            <li style="text-align: center; padding-left: 0px">Source PSD Files <span
                                    style="color:#5f378d; font-weight:700">  $30/per file</span></li>
                        </ul>
                        <!-- <div class="prising_bottom">
                            <p style="padding:3px; text-align: center; color:#e47743; font-weight:500">Please download
                                brief for each project and fill it out separately.</p>
                        </div> -->
                    </div>
                </div>
                <!-- <p id="product_photography">For both product photography and graphic design service - ask for custom
                    quote</p> -->
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <a class="anchor1" id="Photography"></a>
                    <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s"
                        style="padding: 70px 0 0px 0;">
                        <h3>Photography Services</h3>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit sed do eiusmod <br> tempor incididunt.</p>-->
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center">

                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <!-- <div style="text-align: center; font-weight: 500; padding-bottom: 10px; font-size: 1.5em"
                        class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">8
                        IMAGES</div> -->
                    <div class="single_prising text-center wow fadeInUp min-h" data-wow-duration=".7s" data-wow-delay=".8s">
                        <div class="prising_header d-flex flex-column justify-content-between">
                            <h3 style="color: #fff;">BASIC PLAN</h3>
                            <span>(Listing Images) </span>
                            <span>Starts from $1240</span>
                        </div>
                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">1 Hero Image</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">6 Listing Images</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">All Retouched Photos Used
                                in Listing Images (White
                                Background + Lifestyle)</li>
                            <li><img src="public/img/main/mark1.svg" style="width: 15px;">2 Locations (Studio +
                                1 Lifestyle)</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Consultation Call 30mins</li>
                            <!-- <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;"> Project Brief</li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;"> Consultation Call</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;"> High Resolution Images</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;"> Hand Model Included</li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;"> Props</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;"> 3 Revisions</li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;"> Reshoots Not Included</li>
                            <li><img src="{{asset('public/img/main/mark2.svg')}}" style="width: 15px;"> Shipping & Custom Fees Not Included
                            </li> -->
                        </ul>
                        <div class="prising_bottom">
                            <button
                                class="get_now prising_btn btn-popup">i need this!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <!-- <div style="text-align: center; font-weight: 500; padding-bottom: 10px; font-size: 1.5em"
                        class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">15
                        IMAGES</div> -->
                    <div class="single_prising text-center wow fadeInUp min-h" data-wow-duration=".6s" data-wow-delay=".7s">
                        <div class="prising_header d-flex flex-column justify-content-between pink_header">
                            <h3 style="color: #fff;">PREMIUM PLAN
                                </h3>
                            <span>(Listing Images & A+ Content)
                            </span>
                            <span>Starts from $2290</span>
                        </div>
                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">2 Hero Images</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">6 Listing Images
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">A+ Content - 5 Modules
                                (Graphics, Text Modules
                                & Wireframe)</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">All Retouched Photos Used
                                in Listing Images and A+
                                Content (White
                                Background + Lifestyle)</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">2 Locations (Studio +
                                1 Lifestyle)</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Consultation Call 1hr
                            </li>
                            <!-- <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> Consultation Call</li>
                            <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> High Resolution Images</li>
                            <li><img src= asset('img/main/mark1.svg')}}" style="width: 15px;"> Hand Model Included</li>
                            <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> Props Up to $10</li>
                            <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> 3 Revisions</li>
                            <li><img src="('img/main/mark2.svg')}}" style="width: 15px;"> Reshoots Not Included</li>
                            <li><img src="('img/main/mark2.svg')}}" style="width: 15px;"> Shipping & Custom Fees Not Included
                            </li> -->
                        </ul>
                        <div class="prising_bottom">
                            <button
                                class="get_now prising_btn btn-popup">i need this!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" style="padding: 0 5px 0 5px;">
                    <!-- <div style="text-align: center; font-weight: 500; padding-bottom: 10px; font-size: 1.5em;"
                        class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">22
                        IMAGES</div> -->
                    <div class="single_prising text-center wow fadeInUp min-h" data-wow-duration=".6s" data-wow-delay=".6s">
                        <div class="prising_header d-flex flex-column justify-content-between pink_header">
                            <h3 style="color: #fff;">PLATINUM PLAN

                            </h3>
                        <span>(Listing Images, A+ Content,
                            Full Copywriting)
                        </span>
                        <span>Starts from $2620</span>
                        </div>
                        <ul>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">2 Hero Images</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">6 Listing Images</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">A+ Content - 5 Modules
                                (Graphics, Text Modules
                                & Wireframe)</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">All Retouched Photos Used
                                in Listing Images and A+
                                Content (White
                                Background + Lifestyle)</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">2 Locations (Studio +
                                1 Lifestyle)</li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Consultation Call 1hr
                            </li>
                            <li><img src="{{asset('public/img/main/mark1.svg')}}" style="width: 15px;">Listing Copywriting (Fully
                                Optimized Title, Bullet Points,
                                Product Description, Back
                                End Keywords, Organic
                                Keyword Spreadsheet, Text
                                for Main Listing images</li>
                            <!-- <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> High Resolution Images</li>
                            <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> Hand Model Included</li>
                            <li><img src="('img/main/mark1.svg')}}" style="width: 15px;"> Props Up to $10</li>
                            <li><img src="('img/main/mark1.svg'" style="width: 15px;"> 3 Revisions</li>
                            <li><img src="('img/main/mark2.svg')}}" style="width: 15px;"> Reshoots Not Included</li>
                            <li><img src="('img/main/mark2.svg')}}" style="width: 15px;"> Shipping & Custom Fees Not Included
                            </li> -->
                        </ul>
                        <div class="prising_bottom">
                            <button  class="get_now prising_btn btn-popup">i need this!</button>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xl-12 col-md-12" style="padding: 0 5px 0 5px;">
                    <div class="single_prising text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".6s">
                        <div class="prising_header justify-content-between green_header">
                            <h3 style="color: #fff;">ADD-ON ITEMS</h3>
                            <span></span>
                        </div>
                        <ul>
                            <li style="text-align: center; padding-left: 0px">Extra Hero Image <span
                                    style="color:#5f378d; font-weight:700">$100</span></li>
                            <li style="text-align: center; padding-left: 0px">White Background Image <span
                                    style="color:#5f378d; font-weight:700">$40</span></li>
                            <li style="text-align: center; padding-left: 0px">Infographic/Manipulation Image with
                                Product Photography <span style="color:#5f378d; font-weight:700">$120</span></li>
                            <li style="text-align: center; padding-left: 0px">Infographic/Manipulation Image from
                                Existing Images <span style="color:#5f378d; font-weight:700">$65</span></li>
                            <li style="text-align: center; padding-left: 0px">Lifestyle Image <span
                                    style="color:#5f378d; font-weight:700">$100</span></li>
                            <li style="text-align: center; padding-left: 0px">Photoshooting Location Fee <span
                                    style="color:#5f378d; font-weight:700">$120</span></li>
                        </ul>
                        <ul style="margin-top:50px">
                            <li style="text-align: center; padding-left: 0px">Adult Model <span
                                    style="color:#5f378d; font-weight:700">$40/per hour</span></li>
                            <li style="text-align: center; padding-left: 0px">Baby/Child/Pet/Senior Model <span
                                    style="color:#5f378d; font-weight:700">$80/per hour</span></li>
                            <li style="text-align: center; padding-left: 0px">*Baby/Child/Pet/Senior models are subject
                                to increase due to availability</li>
                            <li style="text-align: center; padding-left: 0px"><span
                                    style="color:#5f378d; font-weight:700">Hiring a live model is possible only in
                                    Premium and Platinum Plan</span></li>
                        </ul>
                        <ul style="margin-top:50px">
                            <li style="text-align: center; padding-left: 0px">Infographic Source PSD Files <span
                                    style="color:#5f378d; font-weight:700">$30/per file</span></li>
                            <li style="text-align: center; padding-left: 0px">Raw Image <span
                                    style="color:#5f378d; font-weight:700">$10/per file</span></li>
                        </ul>
                    </div>
                </div> -->
            </div>
 <p class="pricingPara">
                    if you need customized photography plan. please send us your project brief on:
         <br>    <a href="mailto:support@studiopixelnuts.com" class="pricingA">support@studiopixelnuts.com</a>    </p>



            </div>
        </div>
        <!--/ prising_area  -->

        <!-- FAQ -->
        <div class="container" style="margin-top:60px; margin-bottom: 40px;">
            <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                <a class="anchor" id="Faq"></a>
                <h3>Frequently Asked Questions (FAQ)</h3>
                <!-- GENERAL QUESTIONS -->
                <p style="font-size: 1.12em; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">GENERAL QUESTIONS
                </p>
                <button class="collapsible">What do I need to give you before each project?</button>
                <div class="content">
                    <p style="text-align: left;">Before we start working on each project, you will be asked to fill out
                        a brief. The brief will contain all the details required for us to start your project. If you
                        need product photography, please read steps how product photography works on our Home page. Once
                        the brief is completed, we will require upfront payment to start working on the project.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">What is logo design, package design, and
                    infographics?</button>
                <div class="content">
                    <p style="text-align: left;">Please check our portfolio for a detailed description.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">What form of payment do you accept?</button>
                <div class="content">
                    <p style="text-align: left;">We accept bank account transfers and PayPal payments. We will require
                        upfront payment to start any project and the transaction fees will be covered by the client.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">How long will you keep my files in your
                    folder?</button>
                <div class="content">
                    <p style="text-align: left;">We will keep them for just one month, after that, all your files will
                        be deleted from our folder so we can free up space for new clients. We urge you to please
                        download your files as soon as we send them to you, so you don’t lose them in the process.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">How many revisions are included in each
                    project?</button>
                <div class="content">
                    <p style="text-align: left;">3 revisions. Those revisions do not include:
                        <br>1) A new concept. If you require a new concept, you will need to place your order again and
                        receive a completely new plan.
                        <br>2) Reshoots. We will include image revisions free of charge if your product haven’t managed
                        to present your product accurately enough in our photographs. It will require an additional
                        shooting fee for the images to be reshot, if you are not happy with an angle, the model’s pose,
                        background or lighting (given that this is something we will be discussing before the actual
                        project starts).
                    </p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">What if I need more than 3 revisions?</button>
                <div class="content">
                    <p style="text-align: left;">Cost for additional revision for an already existing concept will
                        depend on complexity of revision. Once we see details of the revision, we'll give you a quote.
                    </p>
                </div>


                <!-- GRAPHIC DESIGN QUESTIONS -->
                <p style="font-size: 1.12em; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">GRAPHIC DESIGN
                    QUESTIONS</p>
                <button class="collapsible">Can you make a mockup of my box for my infographic?</button>
                <div class="content">
                    <p style="text-align: left;">Yes. But we will be needing print ready file of your box design in Ai,
                        EPS or PDF format. This is the same file that you send to your supplier or printing company to
                        print your box design. Without this file a mockup cannot be done.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">How much time do you need to complete my
                    infographics?</button>
                <div class="content">
                    <p style="text-align: left;">This will depend on the number of infographics you need. Please contact
                        us to discuss the details.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">What is a 3D model?</button>
                <div class="content">
                    <p style="text-align: left;">3D modeling is the process of developing a photorealistic
                        representation of any surface of an object in three dimensions via softwares such as 3D Max or
                        Blender. The photorealistic product is called a 3D model. Not every product you come across is a
                        3D model with a white background. Some of them are real images taken by a photographer. Be sure
                        not to confuse which one of the two you will be needing, as there is a significant difference
                        which you need to specify when you discuss it with the designer.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">Can you make a 3D model of my product?</button>
                <div class="content">
                    <p style="text-align: left;">For this service you will need a 3D developer who has experience in
                        software such as 3D Max or Blender. Though we don’t do this per say, we can offer you our 3D
                        developer, provided that you ask us for his availability and price range in advance. The final
                        cost and other details will depend on the complexity of your product. We can make some simple or
                        flat products in Adobe Photoshop, such as towels, blankets, bags, mouse pads, but if you’re
                        selling complex product with a lot of details, such as blender, coffee maker etc. you will be
                        needing a professional 3D developer.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">I need package design, but I don’t have dielines.
                    What is that?</button>
                <div class="content">
                    <p style="text-align: left;">A dieline is a flat, two-dimensional template showing the outlines that
                        will be applied to all sides of your packaging. A dieline is not printed on the final piece but
                        is used to determine correct layout and dimensions. You can ask your supplier or printing
                        company to send you your dielines. The acceptable formats for this are Ai, EPS or PDF.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">Can you photoshop my product into a stock
                    photo?</button>
                <div class="content">
                    <p style="text-align: left;">Yes, however, images of your product need to be taken from the same
                        angle as the stock photo. If they are not done from the same angle, the finished result will not
                        look realistic. This is something that we would not recommend. If you purchased one of our plans
                        (basic or premium), we will provide you with an image of your product photographed from the same
                        angle as your stock photo. If you are not sure if your stock photo is good enough for this type
                        of photo manipulation, send us a message beforehand to check if you should actually purchase it.
                    </p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">Who will be purchasing the stock photos?</button>
                <div class="content">
                    <p style="text-align: left;">You can purchase stock images and send us to use in your listing
                        design, or we can purchase it for you and add additional cost of it to your invoice.</p>
                </div>

                <!-- PRODUCT PHOTOGRAPHY QUESTIONS -->
                <p style="font-size: 1.12em; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">PRODUCT
                    PHOTOGRAPHY QUESTIONS</p>
                <button class="collapsible">Do I need to send you my product for product photography?</button>
                <div class="content">
                    <p style="text-align: left;">Yes, you will need to send us your 2 new, production quality samples
                        and also handle the shipping and custom fee. We do not accept samples with defects. Make sure to
                        write that the reason for shipment is a gift (not samples) and put the lowest value of the
                        product ($2-8) to avoid additional custom fees. Higher the value of the sample - bigger chance
                        there will be additional custom fee. If there is additional custom fee, we will pay on your
                        behalf and include it in the invoice. Once you ship your samples, send us a tracking number so
                        that we can check when we will receive it.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">What you will do with my product after the
                    project?</button>
                <div class="content">
                    <p style="text-align: left;">When we finish the project completely, we will dispose or keep your
                        product. We don't offer a service of returning a product to a client at this moment.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">I don’t know what I need in my listing images, can
                    you assist?</button>
                <div class="content">
                    <p style="text-align: left;">Of course! We have worked with hundreds of Amazon sellers and we
                        understand what has the best selling rates on the platform. The cost for creative brief for
                        listing images is $250.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">What does the additional $250 cover?</button>
                <div class="content">
                    <p style="text-align: left;">$250 covers a written strategic plan of photoshooting and what your
                        listing should look like. If necessary, we'll find stock images that will be used in design of
                        your listing too. We will discuss possible modifications, and only after your approval will we
                        proceed with photoshooting and design.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">Will I have full rights to all of my photos and
                    infographics?</button>
                <div class="content">
                    <p style="text-align: left;">Yes. You own all the photos included in the plan.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">Can you hire a specific model for product
                    photography?</button>
                <div class="content">
                    <p style="text-align: left;">Yes, we hire professional models for each photography project. You can
                        provide us with details on what your model should look like and you can also send a reference.
                        The price for a standard model (example: woman, age between 25-30 years) is $40 per hour. When
                        we see your full brief, we will be able to tell how many hours will we be needing the model for
                        and what the final cost will come to. For specific requests, such as babies, seniors (65+),
                        cats/dogs, plus-sized or pregnant women, please discuss this with us first so we can check if
                        they are available the day of the photo shoot and if they meet all of your criteria. Prices for
                        type specific requests can vary.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">What if I have multiple colors or style variations
                    for one specific product?</button>
                <div class="content">
                    <p style="text-align: left;">We can incorporate multiple colors and style variations for your
                        product in one photography plan. Our prices are based on 1 product variation per project. If you
                        require additional product variations to be shot, we will be happy to help you for an additional
                        fee. Please send us your brief first so that we can give you a quote.</p>
                </div>
                <button class="collapsible" style="margin-top: 5px;">Are my images safe with you?</button>
                <div class="content">
                    <p style="text-align: left;">Yes, we do not share any of your images with other clients, nor do we
                        put them in our portfolio without your permission. The information that you give us about your
                        business, product and project is confidential. However, we keep the right to share your images
                        and information for training a new team member.</p>
                </div>

            </div>
        </div>

        <!--/ FAQ -->
    <!-- Modals -->



<!-- editing -->
<div class="popup" id="popup"  >
    <div class="single_prising text-center " style="max-height: 320px; max-width: 400px;">
        <div class="prising_header d-flex justify-content-center align-items-center">
            <h3 class="" >Hey There !</h3>
        </div>
        <div class="p-4 text-div">

            <p class="popuppara">
              This page is currently unavailable. <br>
              Our website is still under construction. <br>
              For more infomation, please reach <br>
              out to us on:
            </p>

            <div class="text-div2"><a href="mailto:support@studiopixelnuts.com">support@studiopixelnuts.com</a></div>
            <div class="prising_bottom2">
                <button class="get_now prising_btn close-popup">Got It</button>
            </div>
        </div>

    </div>
</div>
<!-- editing -->
<!-- editing -->
<div class="popup" id="popup2"  >
    <div class="single_prising text-center " style="max-height: 540px; max-width: 700px;">
        <div class="prising_header d-flex justify-content-center align-items-center">
            <h3 class="popuphead">Before you continue, please read this: </h3>
        </div>
        <div class="p-4 text-div text-div-scroll">
           <h4 class="popupTitle">YOUR ORDER INCLUDES:
        </h4>
        <p class="popuppara">
            2 logo concepts to choose from, 3 minor revisions, and delivery of final artwork in
            Ai, PDF, JPG and transparent PNG format in requested colors.
            Additional branding guide in PDF format with color codes and fonts is not included.
            If you need it, make sure to mention it in the next step (charges apply).
        </p>
           <h4 class="popupTitle">REVISION POLICY:
        </h4>
        <p class="popuppara">
            Our services include only 3 minor revisions (color, font change only in icon-based logos,
            minor shape change). Those revisions do not include new logo concept, new shape, or font
            change in font-based logo concepts. If font change is requested in font-based logo,
            that is considered as a new concept, since the logo in that case has to be done all over
            again. Make sure to provide accurate information to avoid any missunderstandings or
            additional revision charges.
        </p>


        <div class="prising_bottom2 prising_bottom_fix">

            <a href="{{url('quote-logo')}}" class="get_now prising_btn ">I understand.</a>
        </div>
    </div>
</div>

</div><div class="popup" id="packageDesignPopup"  >
    <div class="single_prising text-center " style="max-height: 540px; max-width: 700px;">
        <div class="prising_header d-flex justify-content-center align-items-center">
            <h3 class="popuphead">Before you continue, please read this: </h3>
        </div>
        <div class="p-4 text-div text-div-scroll">
           <h4 class="popupTitle">YOUR ORDER INCLUDES:
        </h4>
        <p class="popuppara">
            1 initial concept, 3 minor revisions, delivery of final artwork for print in Ai and PDF format,
            and high resolution mockup (1 angle). 3D render in multiple angles is not included
        </p>
           <h4 class="popupTitle">REVISION POLICY:
        </h4>
        <p class="popuppara">
            Our services include only 3 minor revisions (color, font, text, minor changes in design
            structure and layout). Those revisions do not include new concept, changes in size of the
            packaging or new type of packaging (for example from pouch to box). Make sure to
            provide accurate information to avoid any misunderstandings or additional revision
            charges.
        </p>


        <div class="prising_bottom2 prising_bottom_fix">

            <a href="{{url('quote-package')}}" class="get_now prising_btn ">I understand.</a>
        </div>
    </div>
</div>
</div>
<!-- editing -->
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            }

            var btns = document.getElementsByClassName('btn-popup')
        var mdl = document.getElementById('popup');
        var clo = document.getElementsByClassName("close-popup")
        for (btn of btns) {
            btn.addEventListener('click', function () {
                mdl.style.display = "flex";
            })
            clo[0].addEventListener('click', function () {
                mdl.style.display = "none";
            });
        }

        window.addEventListener('mouseup', function(event){
var box = document.getElementById('popup');
if(event.target == box){
  box.style.display = 'none';
}
var boxx = document.getElementById('popup2');
if(event.target == boxx){
  boxx.style.display = 'none';
}
  });

        var btns2 = document.getElementsByClassName('logoDesignPopup')
        var mdl2 = document.getElementById('popup2');
        var clo2 = document.getElementsByClassName("close-popup2")
        for (btn2 of btns2) {
            btn2.addEventListener('click', function () {
                mdl2.style.display = "flex";
            })
            clo2[0].addEventListener('click', function () {
                mdl2.style.display = "none";
            });
        }




        </script>
        <script>
                 window.addEventListener('mouseup', function(event){
        var packageDesignBox= document.getElementById('packageDesignPopup');
if(event.target == packageDesignBox){
    packageDesignBox.style.display = 'none';
}
  });

        var btns3 = document.getElementsByClassName('packageDesignPopupbtn')
        var mdl3 = document.getElementById('packageDesignPopup');
        var clo3 = document.getElementsByClassName("close-popup2")
        for (btn3 of btns3) {
            btn3.addEventListener('click', function () {
                mdl3.style.display = "flex";
            })
            clo3[0].addEventListener('click', function () {
                mdl3.style.display = "none";
            });
        }


        </script>
    @stop
