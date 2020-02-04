<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section class="product_heroBannerOuter">
    <div class="productSlider">
        <div class="hero_imageBox productSlideBg"></div>
    </div>
    <!-- <div class="owl-carousel productSlider owl-theme">
        <div class="item">
            <div class="hero_imageBox slide1"></div>
        </div>
        <div class="item">
            <div class="hero_imageBox slide2"></div>
        </div>
    </div> -->
    <div class="hero_outerStrip">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-12">
                    <div class="pr-3">
                        <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Vistaar products are custom-built to suit a wide range of industries to maximise business growth for customers.</h5>
                        <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">Vistaar’s offering has been increasing in both ticket size and tenor. Today Vistaar has four different products, which cover an entire spectrum of capital requirements for our customers, the latest of which is the Bill Discounting product & Equipment finance.</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="images/circle.png" class="bannerIcons circle" alt="">
        <img src="images/small_dots.png" class="bannerIcons doteds" alt="">
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
<section class="solutions_section">
    <div class="container solutionsInner">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="product_detailBox">
                    <div class="product_sectionTitle">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">VISTAAR LENDING SOLUTIONS</h2>
                    </div>
                    <div class="detail_textBox">
                        <h5 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">Business Loans from 2 To 50 Lakhs</h5>
                        <h6 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.4s">Product:</h6>
                        <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.6s">Vistaar Saral Business Loan (VSBL)</h3>
                        <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.8s">The purpose of this loan is to serve small businesses, self-employed segment like traders(all kinds of shops), manufacturers (small manufacturing industries, mills) & services (hotel industry, lathe machine, garages) that have immediate requirement of capital to better their operational, working capital capacities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="parsonCarosal">
                    <div class="parsonCarosal_slider">
                        <ul> 
                            <li>
                                <div class="parsonCarosalBox">
                                    <!-- <span class="index_span">03</span> -->
                                    <img class="carousel-image" alt="Image Caption" src="images/slide_img1.png"></a>
                                    <!-- <div class="carousel-caption">
                                        <p>BUSINESS LOAN</p>
                                        <h1>2 <span>To</span> 10</h1>
                                        <h2>Lakhs</h2>
                                    </div> -->
                                </div>
                            </li>
                            <li>
                                <div class="parsonCarosalBox">
                                    <!-- <span class="index_span">01</span> -->
                                    <img class="carousel-image" alt="Image Caption" src="images/slide_img2.png"></a>
                                    <!-- <div class="carousel-caption">
                                        <p>BUSINESS LOAN</p>
                                        <h1>2 <span>To</span> 50</h1>
                                        <h2>Lakhs</h2>
                                    </div> -->
                                </div>
                            </li>
                            <li>
                                <div class="parsonCarosalBox">
                                    <!-- <span class="index_span">02</span> -->
                                    <img class="carousel-image" alt="Image Caption" src="images/slide_img3.png"></a>
                                    <!-- <div class="carousel-caption">
                                        <p>BUSINESS LOAN</p>
                                        <h1>2 <span>To</span> 60</h1>
                                        <h2>Lakhs</h2>
                                    </div> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 align-self-center">
                <div class="apply_LoanBox wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">
                    <span>End Use:</span>
                    <p>Working capital requirements, Asset purchase, Investment, Business expansion, Debt Consolidation.</p>
                    <a href="#" class="btn loan_btn rounded-pill"><img src="images/play_arrow.png" alt="play image" class="mr-2"> Apply For Loan</a>
                </div>
                
            </div>
        </div>
        <img src="images/arrow.png" class="arrowImg-flot" alt="">
        <img src="images/circle.png" class="circleImg-flot" alt="">
    </div>
</section>
<section class="creaditSection">
    <div class="container">
        <div class="creadit_innerSection">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="creaditDetailInner">
                        <div class="row no-gutters">
                            <div class="col-md-12 col-sm-6 col-12">
                                <div class="creadit_titleDetail">
                                    <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">Unique Credit Methodology</h2>
                                    <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.3s">Very early in the process of credit disbursement,Vistaar recognized the need for a unique methodology for their different customer segments. The company worked on serving customers using sustainable differentiation created through linkages.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-12">
                                <div class="creadi_detaliText mt-sm-5 pt-sm-5">
                                    <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">Vistaar studies the customer’s enterprise in depth and draws out the assessment peculiarities of that trade. The income, ability, intention, business sustainability and credit behaviour are verified through non-traditional income documents and reference checks as well as from traditional income documents and various kinds of credit bureau checks. The data base of references is maintained trade wise and is updated regularly. The trades are continuously monitored and studied and the changes are incorporated in the credit assessment accordingly. The credit assessment gets additional strength from the collateral which is taken for all the facilities for moral suasion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 text-right">
                    <div class="unique_methodBox">
                        <div class="center_imgBox d-inline-flex align-items-center justify-content-center">
                            <div class="center_textBox d-inline-flex align-items-center justify-content-center">
                                <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Unique Credit</h3>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Methodology</p>
                            </div>
                            <div class="flotTextBox boxtype1 top_ wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
                                <h2><span>01</span></h2>
                                <p>In-depth study of a sector to determine unique credit methodology</p>
                            </div>
                            <div class="flotTextBox boxtype1 right_ wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                                <h2><span>02</span></h2>
                                <p>Income assessment through non-traditional documents</p>
                            </div>
                            <div class="flotTextBox boxtype1 bottom_ wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <h2><span>03</span></h2>
                                <p>Reference checks-supply chain players, neighbours</p>
                            </div>
                            <div class="flotTextBox boxtype2 bottom_left wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
                                <h2><span>04</span></h2>
                                <p>Collateral taken for moral suasion</p>
                            </div>
                            <div class="flotTextBox boxtype2 left_ wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.9s">
                                <h2><span>05</span></h2>
                                <p>Continuous refinement of product and credit methodology</p>
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
<script src="js/product.js"></script>
<?php include('includes/footer.php'); ?>