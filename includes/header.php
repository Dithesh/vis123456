<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=0">
    <meta name="HandheldFriendly" content="true" />

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="title" content="">
    <!-- <link rel="icon" href=""> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap-grid.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap-reboot.min.css" crossorigin="anonymous">

    <!-- owl slider -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.default.css" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/jquery.simplyscroll.css"> -->
    <!-- google font -->
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <title>Vistaar</title>
</head>

<body>
    <span  id="map_app" v-cloak>
    
    <div class="header_menuOuter">
        <div class="container">
            <div class="header_nav">
                <div class="nav_brandBox">
                    <img src="images/logo.png" class="logo_img img-fluid" alt="">
                </div>
                <div class="nav_menuBar ml-auto">
                    <ul class="list-unstyled">
                        <li><a href="#">Partner with Us</a></li>
                        <li><a href="#">Loan Enquiry</a></li>
                        <li><a href="#">080-30088494</a></li>
                    </ul>
                </div>
                <div class="social_menuBox">
                    <a href="#"><img src="images/facebook.png" alt=""></a>
                    <a href="#"><img src="images/linkedin.png" alt=""></a>
                    <a href="#"><img src="images/youtube.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="full_slider outerSlider opacity-full" v-bind:class="{slide1: homePageSlide == 2, slide2: homePageSlide == 3}" v-if="homePageSlide < 4"></div>
    
    <div class="full_slider outerSlider slide1 fadeIn" v-if="homePageSlide == 1">
        <div class="text_box">
            <span class="quotesImg left fadeInLeft"><img src="images/qoute.png" alt=""></span>
            <span class="quotesImg right fadeInRight"><img src="images/qoute_right.png" alt=""></span>
            <h3 class="fadeInUp">I HAVE A</h3>
            <h1 class="fadeInDown">BIGGER STORE.</h1>
        </div>
        <img src="images/dots_group.png" class="banner_designImage donts1" alt="">
        <img src="images/dots_group.png" class="banner_designImage donts2" alt="">
        <img src="images/circle.png" class="banner_designImage circle1" alt="">
        <img src="images/circle.png" class="banner_designImage circle2" alt="">
        <img src="images/arrow.png" class="banner_designImage arrow1 fadeOutRight" alt="">
        <ul class="dotsOuter list-unstyled">
            <li class="active"></li>
            <li v-on:click="homePageSlide = 2"></li>
            <li v-on:click="homePageSlide = 3"></li>
            <li v-on:click="homePageSlide = 4"></li>
        </ul>
    </div>
    <div class="full_slider outerSlider slide2 fadeIn" v-if="homePageSlide == 2">
        <div class="text_box">
        <span class="quotesImg left fadeInLeft"><img src="images/qoute.png" alt=""></span>
        <span class="quotesImg right fadeInRight"><img src="images/qoute_right.png" alt=""></span>
            <h3 class="fadeInUp">I HAVE TRADITIONAL</h3>
            <h1 class="fadeInDown">CRAFT WORK STOCK.</h1>
        </div>
        <img src="images/dots_group.png" class="banner_designImage donts1" alt="">
        <img src="images/dots_group.png" class="banner_designImage donts2" alt="">
        <img src="images/circle.png" class="banner_designImage circle1" alt="">
        <img src="images/circle.png" class="banner_designImage circle2" alt="">
        <img src="images/arrow.png" class="banner_designImage arrow1 fadeOutRight" alt="">
        <ul class="dotsOuter list-unstyled">
            <li v-on:click="homePageSlide = 1"></li>
            <li class="active"></li>
            <li v-on:click="homePageSlide = 3"></li>
            <li v-on:click="homePageSlide = 4"></li>
        </ul>
    </div>
    <div class="full_slider outerSlider slide3 fadeIn" v-if="homePageSlide == 3">
        <div class="text_box">
            <h3 class="fadeInUp">EMPOWERING SMALL</h3>
            <h1 class="fadeInDown">BUSINESSES</h1>
        </div>
        <div class="bg_transText text-center">
            <h1 class="fadeInLeft">EMPOWERING</h1>
            <h1 class="fadeIn">SMALL</h1>
            <h1 class="fadeInRight">BUSINESSES</h1>
        </div>
        <img src="images/text-box.png" class="banner_designImage textImgBox fadeIn" alt="">
        <img src="images/dots_group.png" class="banner_designImage donts1" alt="">
        <img src="images/circle.png" class="banner_designImage circle1" alt="">
        <img src="images/circle.png" class="banner_designImage circle2" alt="">
        <img src="images/arrow.png" class="banner_designImage arrow1 fadeOutRight" alt="">
        <ul class="dotsOuter list-unstyled">
            <li v-on:click="homePageSlide = 1"></li>
            <li v-on:click="homePageSlide = 2"></li>
            <li class="active"></li>
            <li v-on:click="homePageSlide = 4"></li>
        </ul>
    </div>
    <span v-if="homePageSlide == 4">

