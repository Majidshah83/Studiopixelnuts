<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Great image is the silent seller | Pixelnuts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <link rel="shortcut icon" href="{{asset('public/img/main/favicon.ico" type="image/x-icon')}}">
    <link rel="icon" href="{{asset('public/img/main/favicon.ico" type="image/x-icon')}}">

    <!-- CSS here -->
     @include('layouts.style')    <!--inlude Style page -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
        window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v8.0'
        });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
        attribution=install_email
        page_id="111457720313998"
        theme_color="#5f378d">
        </div>

    <!-- header-start -->
    @include('layouts.header')
    <!-- header-end -->





@yield('content')  <!-- content is name  of Index page -->



    <!-- footer start -->
    @include('layouts.footer')
    <!--/ footer end  -->

    <!-- JS here -->
    @include('layouts.script')

</body>

</html>
