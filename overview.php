<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<section class="home_bannerBox_outer">
    <img src="images/dots_group.png" class="banner_designImage donts1" alt="">
    <img src="images/dots_group.png" class="banner_designImage donts2" alt="">
    <img src="images/circle.png" class="banner_designImage circle1" alt="">
    <img src="images/circle.png" class="banner_designImage overviewSliderImage circle2" alt="">
    <img src="images/arrow.png" class="banner_designImage overviewSliderImage arrow1 fadeOutRight" alt="">
    <div class="owl-carousel overviewHero_slider owl-theme">
        <div class="item">
            <div class="full_slider slide5">
                <div class="container">
                    <div class="text_box overviewTitle">
                        <h3 class="fadeInUp">EMPOWERING SMALL</h3>
                        <h1 class="fadeInDown">BUSINESSES</h1>
                    </div>
                    <img src="images/text-box.png" class="banner_designImage textImgBox overview_slider fadeIn" alt="">
                </div>
            </div>
        </div>
    </div>
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
                        <a href="partner.php" class="bannerMenu_inner">
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
</section>

<section class="mission_visionSection">
    <div class="container">
        <img src="images/circle.png" class="floatImg circle" alt="">
        <img src="images/arrow-back.png" class="floatImg arrow wow fadeInLeft" alt="">
        <div class="vision_inner">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sectionTitleBox">
                        <h2 class="no_visible wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">MISSION <br>& VISION</h2>
                    </div>
                    <div class="dateBox">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">2010</h2>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">Vistaar was started with a mission to serve small businesses.</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="missionVissionBox wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
                        <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <div class="col-auto">
                                <img src="images/vision_icon.png" class="missionIcon" alt="">
                            </div>
                            <div class="col">
                                <h2>VISION</h2>
                                <p>Our Vision is to be catalyst to the underserved so that they can achieve greater economic and social well-being. Specifically we offer a full range of financial services customized to fulfil their every business requirement and move them into the mainstream</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.8s">
                            <div class="col-auto">
                                <img src="images/misson_icon.png" class="missionIcon" alt="">
                            </div>
                            <div class="col">
                                <h2>MISSION</h2>
                                <p>We shall achieve our vision by deeper understanding of specific customer segments, to fulfil their financial needs through customised products and simple processes</p>
                                <span class="mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="core_values">
    <img src="images/circle.png" class="floatImg circle" alt="">
    <img src="images/arrow.png" class="floatImg arrow" alt="">
    <img src="images/arrow-back.png" class="floatImg arrow2" alt="">
    <div class="container">
        <div class="coreValue_inner">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title_box">
                        <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">CORE VALUES</h2>
                    </div>
                    <div class="coureValueBox customer blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                        <img src="images/customer.png" class="coureIcon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s" alt="">
                        <h4 class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.8s">Customer Centricity</h4>
                        <p class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.9s">Our products, processes and people will focus on enhancing the economic output of our customers` enterprises.</p>
                        <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">01</span>
                    </div>
                    <div class="coureValueBox ethics orange wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                        <img src="images/etches.png" class="coureIcon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s" alt="">
                        <h4 class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.8s">Ethics</h4>
                        <p class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.9s">We will be ethical in our interactions with customers, colleagues and associates.</p>
                        <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">03</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="coureValueBox transparency orange wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                        <img src="images/transparecy.png" class="coureIcon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s" alt="">
                        <h4 class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.8s">Transparency</h4>
                        <p class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.9s">We shall provide all the required information to customers, employees and other stakeholders.</p>
                        <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">02</span>
                    </div>
                    <div class="coureValueBox team blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                        <img src="images/team.png" class="coureIcon wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s" alt="">
                        <h4 class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.8s">Team work</h4>
                        <p class="wow fadeInBottom" data-wow-duration="1s" data-wow-delay="1.9s">We will display exemplary team work towards meeting organizational goals.</p>
                        <span class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">04</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="principles">
    <img src="images/circle.png" class="floatImg circle" alt="">
    <img src="images/arrow.png" class="floatImg arrow" alt="">
    <img src="images/overview_dots.png" class="floatImg dots" alt="">
    <div class="container">
        <div class="principles_inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="title_box">
                        <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">FIVE PRINCIPLES</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="principleBox blueBox wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                        <span>01</span>
                        <p>Our Customer is at the Centre of everything that we do.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="principleBox orangeBox wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                        <span>02</span>
                        <p>I hold myself Accountable for my Performance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="principleBox blueBox wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.6s">
                        <span>03</span>
                        <p>I will treat Colleagues the way I expect to be treated.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="principleBox blueBox wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.9s">
                        <span>04</span>
                        <p>My colleagues and I will deliver greater results, working together, than in isolation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="principleBox blueBox wow fadeInLeft" data-wow-duration="1s" data-wow-delay="2.1s">
                        <span>05</span>
                        <p>Each of my actions will be to the highest standards of Integrity & Ethics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer testimonial section -->

<section class="footerTop_section">
    <?php include('includes/footermenu.php'); ?>
</section>
<?php include('includes/footertop.php'); ?>
<script src="js/product.js"></script>
<?php include('includes/footer.php'); ?>
    
    

    