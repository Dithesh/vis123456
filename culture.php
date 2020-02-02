<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section class="culture_heroBannerOuter">
    <div class="owl-carousel cultureSlider owl-theme">
        <div class="item">
            <div class="hero_imageBox slide1"></div>
        </div>
        <div class="item">
            <div class="hero_imageBox slide2"></div>
        </div>
    </div>
    <div class="hero_outerStrip">
        <img src="images/culture/title.png" class="titleImg" alt="">
        <div class="banner_menuBoxRow" id="product_menu">
            <div class="row" v-if="menuHidden">
                <div class="col-lg col-md-3">
                    <div class="bannerMenu_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <a href="overview.php" class="bannerMenu_inner">
                            <div class="frontSide">
                                <img src="images/small-arrow.png" class="arrow_img" alt="">
                                <span>About Us</span>
                            </div>
                            <div class="backSide">
                                <div>
                                    <p>Mission &amp; Vision</p>
                                    <p>Core Values</p>
                                    <p>Five Principles</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-3">
                    <div class="bannerMenu_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <a href="product.php" class="bannerMenu_inner">
                        <div class="frontSide">
                            <img src="images/small-arrow.png" class="arrow_img" alt="">
                            <span>Products</span>
                        </div>
                        <div class="backSide">
                            <div>
                                <p>Vistaar Lending Solutions</p>
                                <p>Unique Credit Methodology</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-3">
                    <div class="bannerMenu_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <a href="#" class="bannerMenu_inner">
                        <div class="frontSide">
                            <img src="images/small-arrow.png" class="arrow_img" alt="">
                            <span>Our Customers</span>
                        </div>
                        <div class="backSide">
                            <div>
                                <p>Customer Testimonials</p>
                                <p>Sectors</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-3">
                    <div class="bannerMenu_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <a href="#" class="bannerMenu_inner">
                        <div class="frontSide">
                            <img src="images/small-arrow.png" class="arrow_img" alt="">
                            <span>Working At Vistaar</span>
                        </div>
                        <div class="backSide">
                            <div>
                                <p>Why Vistaar</p>
                                <p>Employee Speak</p>
                                <p>Board of Directors</p>
                                <p>Management Team</p>
                            </div>
                        </div>          
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-3">
                    <div class="bannerMenu_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <a href="#" class="bannerMenu_inner">
                        <div class="frontSide">
                            <img src="images/small-arrow.png" class="arrow_img" alt="">
                            <span>Investor Relations</span>
                        </div>
                        <div class="backSide">
                            <div>
                                <p>Our Investors</p>
                                <p>Our Lenders</p>
                                <p>Our Partners</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-3">
                    <div class="bannerMenu_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                        <a href="#" class="bannerMenu_inner">
                        <div class="frontSide">
                            <img src="images/small-arrow.png" class="arrow_img" alt="">
                            <span>News</span>
                        </div>
                        <div class="backSide">
                            <div>
                                <p>Saral Business Sampatti Vyapar Mortgage</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-3">
                    <div class="bannerMenu_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <a href="#" class="bannerMenu_inner">
                        <div class="frontSide">
                            <img src="images/small-arrow.png" class="arrow_img" alt="">
                            <span>Contact</span>
                        </div>
                        <div class="backSide">
                            <div>
                                <p>Saral Business Sampatti Vyapar Mortgage</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <span class="showMenuBtn" v-bind:class="{ close: menuHidden }" v-on:click="menuHidden = !menuHidden"><img src="images/plus.png" alt=""></span>
        </div>
    </div>
</section>

<section class="whyvistarSection">
    <div class="container">
        <div class="cultureInner whyVisitInner">
            <h4>If you are young and ambitious with a passion to excel Vistaar welcomes you to be a part of our growth journey.</h4>
            <div class="title_box">
                <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">Why Vistaar</h2>
            </div>
            <div class="vistarPoints row justify-content-between">
                <div class="col-xl-auto col-lg-2">
                    <div class="vistarPointBox">
                        <div class="iconBox">
                            <img src="images/culture/icon1.png" class="img-fluid" alt="">
                        </div>
                        <p>Professional Development Tracks for employees</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-2">
                    <div class="vistarPointBox">
                        <div class="iconBox">
                            <img src="images/culture/icon2.png" class="img-fluid" alt="">
                        </div>
                        <p>Open culture where teamwork, transparency and integrity are centre</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-2">
                    <div class="vistarPointBox">
                        <div class="iconBox">
                            <img src="images/culture/icon3.png" class="img-fluid" alt="">
                        </div>
                        <p>Multiple incentives as additional remuneration</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-2">
                    <div class="vistarPointBox">
                        <div class="iconBox">
                            <img src="images/culture/icon4.png" class="img-fluid" alt="">
                        </div>
                        <p>Nation building through social and economic impact</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-2">
                    <div class="vistarPointBox">
                        <div class="iconBox">
                            <img src="images/culture/icon5.png" class="img-fluid" alt="">
                        </div>
                        <p>Part of a leading financial service provider in India</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-2">
                    <div class="vistarPointBox">
                        <div class="iconBox">
                            <img src="images/culture/icon6.png" class="img-fluid" alt="">
                        </div>
                        <p>Part of a well funded, fast growing corporate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footerTop_section">
    <?php include('includes/footermenu.php'); ?>
</section>
<?php include('includes/footertop.php'); ?>
<script src="js/product.js"></script>
<?php include('includes/footer.php'); ?>