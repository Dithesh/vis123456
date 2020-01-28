<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section class="partner_slider">
    <div class="partnerSliderBox">
        <div class="partnerSliderText">
            <span class="quotesImg left fadeInLeft"><img src="images/qoute.png" alt=""></span>
            <span class="quotesImg right fadeInRight"><img src="images/qoute_right.png" alt=""></span>
            <h3 class="fadeInUp">GREAT VISION WITHOUT</h3>
            <h1 class="fadeInDown">PARTNERSHIP IS<br>IRRELEVANT</h1>
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
    </div>
</section>

<section class="investors_section">
    <div class="container">
        <div class="inverstorInner">
        <img src="images/arrow.png" class="arrowImg" alt="">
        <img src="images/circle.png" class="circle" alt="">
            <div class="row no-gutters">
                <div class="col-md col-sm-12">
                    <div class="sectionHeading_text investor_title">
                        <h2>OUR<br>INVESTORS</h2>
                    </div>
                    <div class="partner_logoOuter ml-auto">
                        <div class="partner_inner">
                            <div class="logo_front">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_imgBox">
                                    <img src="images/partnerpage/omidyar.png" alt="">
                                </div>
                                <div class="logo_boxFooter">
                                    <a href="#">VIEW MORE &amp;&amp;<img src="images/partnerpage/view-more.png" alt=""></a>
                                    <a href="mailto:www.omidyarnetwork.in">www.omidyarnetwork.in</a>
                                </div>
                            </div>
                            <div class="logo_back">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_backInner">
                                    <h3>OMIDYAR NETWORK</h3>
                                    <p>Omidyar Network invests in entrepreneurs who share our commitment to advancing social good at the pace and scale the world needs today. We are focused on five key areas we believe are building blocks for prosperous, stable, and open societies: Consumer Internet and Mobile, Education, Financial Inclusion, Governance & Citizen Engagement, and Property Rights. We take calculated risks in the earliest stages of innovation, helping to transform promising ideas into successful ventures.</p>
                                    <div class="logo_boxFooter">
                                        <a href="mailto:www.omidyarnetwork.in">www.omidyarnetwork.in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partner_logoOuter ml-auto">
                        <div class="partner_inner">
                            <div class="logo_front">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_imgBox">
                                    <img src="images/partnerpage/westbridge.png" alt="">
                                </div>
                                <div class="logo_boxFooter">
                                    <a href="#">VIEW MORE &amp;&amp;<img src="images/partnerpage/view-more.png" alt=""></a>
                                    <a href="mailto:www.omidyarnetwork.in">www.omidyarnetwork.in</a>
                                </div>
                            </div>
                            <div class="logo_back">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_backInner">
                                    <h3>WestBridge Capital</h3>
                                    <p>Saama Capital II, is an India focused venture capital fund and is the independent successor fund to SVB India Capital Partners, I ("SICP"). SICP has been successfully investing in Indian companies since 2006 following a collaborative partner driven approach with diversification across stage and sector. Saama Capital invests in exceptional entrepreneurs and ideas to build great companies. Our investments includes names such as Tutorvista, Naaptol, One97 Communications, iYogi, Shriram EPC, Sula Wines, Shaadi.com and Genesis Colors.</p>
                                </div>
                                <div class="logo_boxFooter">
                                    <a href="mailto:www.westbridgecap.com">www.westbridgecap.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto col-sm-12">
                    <div class="partner_logoOuter">
                        <div class="partner_inner">
                            <div class="logo_front">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_imgBox">
                                    <img src="images/partnerpage/elevr.png" alt="">
                                </div>
                                <div class="logo_boxFooter">
                                    <a href="#">VIEW MORE <img src="images/partnerpage/view-more.png" alt=""></a>
                                    <a href="mailto:www.omidyarnetwork.in">www.elevarequity.com</a>
                                </div>
                            </div>
                            <div class="logo_back">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_backInner">
                                    <h3>elevar equity</h3>
                                    <p>Elevar Equity, a human centered venture capital firm, invests in transformative and scalable businesses focused on customers in low income communities primarily in India and Latin America. The Elevar team spends a significant amount of time in the field to obtain ground up insights into the priorities, challenges, spending patterns and aspirations of underserved customers. These insights, when combined with market analysis, have translated into specific investment themes in financial services, education, housing and healthcare. The Elevar Method of investing has democratized the provision of essential services for over 20 million low income customers, catalyzed billions of dollars of capital into 25+ companies led by world-class entrepreneurs and generated outstanding returns for investors.</p>
                                </div>
                            </div>
                            <div class="logo_boxFooter">
                                <a href="mailto:www.omidyarnetwork.in">www.elevarequity.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="partner_logoOuter">
                        <div class="partner_inner">
                            <div class="logo_front">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_imgBox">
                                    <img src="images/partnerpage/elevr.png" alt="">
                                </div>
                                <div class="logo_boxFooter">
                                    <a href="#">VIEW MORE <img src="images/partnerpage/view-more.png" alt=""></a>
                                    <a href="mailto:www.omidyarnetwork.in">www.elevarequity.com</a>
                                </div>
                            </div>
                            <div class="logo_back">
                                <img src="images/partnerpage/logo-graphic-top.png" class="img-fluid topImg" alt="">
                                <div class="logo_backInner">
                                    <h3>Saama Capital</h3>
                                    <p>Saama Capital II, is an India focused venture capital fund and is the independent successor fund to SVB India Capital Partners, I ("SICP"). SICP has been successfully investing in Indian companies since 2006 following a collaborative partner driven approach with diversification across stage and sector. Saama Capital invests in exceptional entrepreneurs and ideas to build great companies. Our investments includes names such as Tutorvista, Naaptol, One97 Communications, iYogi, Shriram EPC, Sula Wines, Shaadi.com and Genesis Colors.</p>
                                </div>
                                <div class="logo_boxFooter">
                                    <a href="mailto:www.saamacapital.vc">www.saamacapital.vc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lenders_section">
    <div class="container">
        <div class="leander_inner">
            <div class="sectionHeading_text leanders_title">
                <h2>OUR<br>Lenders</h2>
            </div>
            <div class="laenders_sliderOuter">
            <div class="owl-carousel owl-theme lender_slider">
                <div class="item">
                    <div class="lender_slide_box">
                        <img src="images/partnerpage/logo_axis.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="lender_slide_box">
                        <img src="images/partnerpage/icici-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="lender_slide_box">
                        <img src="images/partnerpage/hdfc-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="lender_slide_box">
                        <img src="images/partnerpage/union-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="lender_slide_box">
                        <img src="images/partnerpage/blogo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="lender_slide_box">
                        <img src="images/partnerpage/logo_axis.png" alt="">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="partner_section">
    <div class="container">
        <div class="partner_inner">
            <div class="sectionHeading_text partner_title">
                <h2>OUR<br>Lenders</h2>
            </div>
            <div class="partner_sliderOuter">
            <div class="owl-carousel owl-theme partner_sliderSlideBox">
                <div class="item">
                    <div class="partner_slide_box">
                        <img src="images/partnerpage/r-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="partner_slide_box">
                        <img src="images/partnerpage/spot-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="partner_slide_box">
                        <img src="images/partnerpage/spot-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="partner_slide_box">
                        <img src="images/partnerpage/indus-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="partner_slide_box">
                        <img src="images/partnerpage/naobi-logo.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="partner_slide_box">
                        <img src="images/partnerpage/logo_axis.png" alt="">
                    </div>
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
<?php include('includes/footer.php'); ?>