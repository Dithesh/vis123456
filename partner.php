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
    <img src="images/arrow.png" class="arrowImg" alt="">
    <img src="images/circle.png" class="circle" alt="">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md col-sm-12">
                <div class="sectionHeading_text investor_title">
                    <h2>OUR<br>INVESTORS</h2>
                </div>
                <div class="partner_logoOuter">
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
                            <h3>OMIDYAR NETWORK</h3>
                            <p>Omidyar Network invests in entrepreneurs who share our commitment to advancing social good at the pace and scale the world needs today. We are focused on five key areas we believe are building blocks for prosperous, stable, and open societies: Consumer Internet and Mobile, Education, Financial Inclusion, Governance & Citizen Engagement, and Property Rights. We take calculated risks in the earliest stages of innovation, helping to transform promising ideas into successful ventures.</p>
                            <div class="logo_boxFooter">
                                <a href="mailto:www.omidyarnetwork.in">www.omidyarnetwork.in</a>
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
                            <h3>OMIDYAR NETWORK</h3>
                            <p>Elevar Equity, a human centered venture capital firm, invests in transformative and scalable businesses focused on customers in low income communities primarily in India and Latin America. The Elevar team spends a significant amount of time in the field to obtain ground up insights into the priorities, challenges, spending patterns and aspirations of underserved customers. These insights, when combined with market analysis, have translated into specific investment themes in financial services, education, housing and healthcare. The Elevar Method of investing has democratized the provision of essential services for over 20 million low income customers, catalyzed billions of dollars of capital into 25+ companies led by world-class entrepreneurs and generated outstanding returns for investors.</p>
                            <div class="logo_boxFooter">
                                <a href="mailto:www.omidyarnetwork.in">www.elevarequity.com</a>
                            </div>
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