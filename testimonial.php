<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section class="testimonialPage_section" id="testimonial">
    <div class="container">
        <div class="testimonialPage_inner">
            <div class="sectionHeading_text testimonialPage_title">
                <h2 class="no_visible wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">Customer Testimonials</h2>
            </div>

            <div class="testimonial_slideOuter" v-bind:class="selectedslide">
                <div class="box1 testimonial_col green" v-on:click="testimonialslide('active1')">
                    <div class="testimonialSmallBox">
                        <img src="images/arrow-back.png" class="position-absolute" style="left:60%; top:40px; width:30px" alt="">
                        <img src="images/circle.png" class="position-absolute" style="left:10%; top:180px; width:15px" alt="">
                        <h4 class="smallTitle no_visible wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" >Sanhin<br>Ingawale</h4>
                        <div class="tstimonialDetail row">
                            <div class="col-auto tstimonialDetail_left" v-if="selectedslide == 'active1'">
                                <h1 class="no_visible wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">Sanhin</h1>
                                <h2 class="no_visible wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.2s">Ingawale</h2>
                                <div class="detailTextBox no_visible wow fadeIn" data-wow-duration="0.4s" data-wow-delay=".2s">
                                    <div class="row no-gutters pb-3 br-b-1px">
                                        <div class="col-6 br-r-1px">
                                            <div class="d-inline-block">
                                                <span>Business:</span>
                                                <p>Tea & Snacks shop</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="d-inline-block text-center">
                                                <span>Loan Amount:</span>
                                                <p>10 LAKHS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="br-b-1px py-3 mb-3">
                                        <span>Purpose:</span>
                                        <p>House Purchase</p>
                                    </div>
                                    <div>
                                        <span>Location: </span>
                                        <p>Pune</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <img src="images/testimonial/santhin.png" class="img-fluid testImg no_visible wow fadeIn" data-wow-duration="0.4s" data-wow-delay=".2s" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box2 testimonial_col orange" v-on:click="testimonialslide('active2')">
                    <div class="testimonialSmallBox">
                         <img src="images/circle.png" class="position-absolute" style="left:60%; top:40px; width:15px" alt="">
                        <img src="images/arrow.png" class="position-absolute" style="right:42%; top:250px; width:30px" alt="">
                        <h4 class="smallTitle no_visible wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" >GANESH<br>GOWDA</h4>
                        <div class="tstimonialDetail row">
                            <div class="col-auto tstimonialDetail_left" v-if="selectedslide == 'active2'">
                                <h1 class="no_visible wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">GANESH</h1>
                                <h2 class="no_visible wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">GOWDA</h2>
                                <div class="detailTextBox no_visible wow fadeIn" data-wow-duration="0.4s" data-wow-delay=".2s">
                                    <div class="row no-gutters pb-3 br-b-1px">
                                        <div class="col-6 br-r-1px">
                                            <div class="d-inline-block">
                                                <span>Business:</span>
                                                <p>Soup Shop</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="d-inline-block text-center">
                                                <span>Loan Amount:</span>
                                                <p>17 LAKHS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="br-b-1px py-3 mb-3">
                                        <span>Purpose:</span>
                                        <p>Business improvement & House Construction</p>
                                    </div>
                                    <div>
                                        <span>Location: </span>
                                        <p>Coimbatore</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <img src="images/testimonial/ganesh.png" class="img-fluid testImg no_visible wow fadeIn" data-wow-duration="0.4s" data-wow-delay=".2s"  alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box3 testimonial_col green" v-on:click="testimonialslide('active3')">
                    <div class="testimonialSmallBox">
                        <img src="images/circle.png" class="position-absolute" style="left:80%; top:50px; width:15px" alt="">
                        <img src="images/arrow-back.png" class="position-absolute" style="right:10%; top:180px; width:30px" alt="">
                        <h4 class="smallTitle no_visible wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" >VIJAY<br>KUMAR</h4>
                        <div class="tstimonialDetail row">
                        <div class="col-auto tstimonialDetail_left" v-if="selectedslide == 'active3'">
                                <h1 class="no_visible wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">VIJAY</h1>
                                <h2 class="no_visible wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay=".2s">KUMAR</h2>
                                <div class="detailTextBox no_visible wow fadeIn" data-wow-duration="0.4s" data-wow-delay=".2s">
                                    <div class="row no-gutters pb-3 br-b-1px">
                                        <div class="col-6 br-r-1px">
                                            <div class="d-inline-block">
                                                <span>Business:</span>
                                                <p>Vegetable Vendor</p>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="d-inline-block text-center">
                                                <span>Loan Amount:</span>
                                                <p>6 LAKHS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="br-b-1px py-3 mb-3">
                                        <span>Purpose:</span>
                                        <p>Working Capital</p>
                                    </div>
                                    <div>
                                        <span>Location: </span>
                                        <p>Indore</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <img src="images/testimonial/vijay.png" class="img-fluid testImg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial_detailTextOuter">
                <div class="testiMonial_innerText testi1" v-if="selectedslide == 'active1'">
                    <h5 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">Believing on his entrepreneurial skills, Sanhin Ingawale left his job at a small private firm 6 years ago and started a Tea & Snacks Shop at one of the prime location of Pune, </h5>

                    <p class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">which was very near to the IT hub and National highway. With his dedication and hard work, he could earn a profit of 10-15%. Seeing the tall buildings, it was his wish to fulfil his mother’s dream of having their own house at one of the prime locations at Pune. Fulfilling his dream of having a tea shop was achievable, but having an own house at Pune without income documents was like reaching out to the moon and stars. Yet, to fulfil his dream, he approached a DSA who referred Vistaar Finance to him. Hence for Sachin, owning a house at Pune was no longer a dream. He availed 10 lakhs loan to purchase a house worth of 15 Lakhs and provided an own contribution receipt of 5 Lakhs.</p>

                    <h3 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">Testimonial</h3>

                    <p class="text-bold no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">
                    “ I never knew availing loan from Vistaar was so easy as I did not have income documents to prove my income. No Income documents required, no bank statement was asked , with just KYC and property papers my loan was processed. I could get a loan of 10 Lakhs for purchasing a house of 420 sqft at Mauli Heights. My dream of purchasing a house for my mother was fulfilled by Vistaar and I am living my dream. I am ever grateful to Vistaar.”
                    </p>

                    <h3 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">TIMELINE</h3>

                    <div class="testimonialMilstonBox no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">
                        <div class="devideBox">
                            <h3>2014</h3>
                            <h3>2019</h3>
                        </div>
                        <div class="indicatorBox">
                            <span style="width:80%"></span>
                            <span class="darker" style="width:25%; left:auto; right:0;"></span>
                        </div>
                        <div class="pointsBox">
                            <div>
                                <ul class="list-unstyled">
                                    <li>Left job, started Tea & Snacks stall</li>
                                    <li>Has a profit of 10-15%</li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-unstyled">
                                    <li>Avails a loan of 10 Lakhs to purchase a flat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testiMonial_innerText testi2" v-if="selectedslide == 'active2'">
                    <h5 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">A young lady with zeal and passion to prove herself, moved from her village Shivagangai to Coimbatore 8 years ago to set up her own business. She started with a small soup shop in Coimbatore.</h5>

                    <p class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">She had the dream of expanding her business to different parts of the city and having her own house at Coimbatore. She approached many financiers for loan but no one could meet her requirements. One of her friends suggested her to approach Vistaar and hence she applied for loan at Vistaar. As she was offering vacant land as collateral, the branch team explained her to avail 10 Lakhs loan and improve her business activities and after 12 months as she will become a privileged customer of Vistaar, she may take loan for construction of house. Hence she took a loan of 10 Lakhs in May 2018 and opened 4 soup shops at different locations. Now she earns a profit of Rs 3000 to 4000 daily. After 1 year, she approached Vistaar again and took additional loan of 7 Lakhs for constructing her own house in the vacant land.</p>

                    <h3 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">Testimonial</h3>

                    <p class="text-bold no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">“Success and happiness comes in bits if one works hard for it. I had dreamt of expanding my business and having my own house at Coimbatore. Vistaar was my stepping stone of success. In May 2018, they gave me a loan of 10 Lakhs against my Vacant land and now in December 2019 I again took a loan of 7 Lakhs for constructing my house. As my friend had referred Vistaar to me, I have referred my friends to Vistaar who are in need of loan. Vistaar processes loan with minimal documents in short period of time. Thank you Vistaar for helping me live my dream.”</p>

                    <h3 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">TIMELINE</h3>

                    <div class="testimonialMilstonBox no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">
                        <div class="devideBox">
                            <h3>2012</h3>
                            <h3>2018</h3>
                            <h3>2019</h3>
                        </div>
                        <div class="indicatorBox">
                            <span style="width:35%;"></span>
                            <span style="width:35%; left:33%;"></span>
                            <span style="width:35%; left:auto; right:0;" class="darker"></span>
                        </div>
                        <div class="pointsBox">
                            <div>
                                <ul class="list-unstyled">
                                    <li>8 years ago started business in the name of “Green World Food” </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-unstyled">
                                    <li>May 2018 - Took 10 Lakhs Loan from Vistaar</li>
                                    <li>Has 4 Soup Centres in Coimbatore</li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-unstyled">
                                    <li>May 2019- Took 7 Lakhs for construction of house</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testiMonial_innerText testi3" v-if="selectedslide == 'active3'">
                    <h5 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">A small property dealer, when suffered losses in his business 6 years ago, did not lose heart and decided to start afresh. </h5>

                    <p class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">This time he ventured into vegetables business and started selling vegetables in a small mandi of Indore named Rajmohala Mandi. He used to procure vegetables from the farmers by paying them advance and sold it to the retail shops. With time, his profit increased to 30k to 40k per month. But in July 19, when the industry went for a toss, prices of the vegetables increased and the demand of farmers for more advance increased, he could no more manage by taking hand loans from friends and relatives. He also had the dream of increasing his business and hence searched for a financier. He discussed about the loan requirement with his friend who referred Vistaar to him. Being a first time borrower he was hesitant at first, but when he met the Branch Manager and Credit Manager of Vistaar, there was no looking back. He availed a loan of 6 Lakhs and received the payment within 7 working days. </p>

                    <h3 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">Testimonial</h3>

                    <p class="text-bold no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">“I am highly obliged to Vistaar for helping me live my dream of expanding my business. Vistaar helped me in times of my need of funds and I am ever grateful to Vistaar. I have also referred my friends who are in need of funds to Vistaar. Being a first time borrower, I was at first hesitant, but the officials made the process so simple. With minimum documents, the loan process got over with a week !! My profit has increased to 40k to 60k per month. I am now doing business in one of the largest mandi in Indore.”</p>

                    <h3 class="no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".1s">TIMELINE</h3>

                    <div class="testimonialMilstonBox no_visible wow fadeInDown" data-wow-duration="0.4s" data-wow-delay=".2s">
                        <div class="devideBox">
                            <h3>2013</h3>
                            <h3>2016</h3>
                            <h3 class="last">2018</h3>
                        </div>
                        <div class="indicatorBox">
                            <span style="width:30%;"></span>
                            <span style="width:30%; left:25%;"></span>
                            <span class="darker" style="width:50%; left:auto; right:0;"></span>
                        </div>
                        <div class="pointsBox">
                            <div>
                                <ul class="list-unstyled">
                                    <li>Took Shop establishment Certificate</li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-unstyled">
                                    <li>Earned a profit of 30-40k per month, operated from a small Mandi</li>
                                </ul>
                            </div>
                            <div class="last">
                                <ul class="list-unstyled">
                                    <li>July 2018 - Took loan from Vistaar</li>
                                    <li>Profit has increased to 40k-60k per month, operates in the largest mandi of Indore</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="sector_section">
    <div class="container">
        <div class="sector_inner">
            <div class="sectionHeading_text sector_title">
                <h2 class="no_visible wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">SECTORS</h2>
            </div>
            <div class="details_text">
                <p class="no_visible wow fadeInDown" data-wow-duration="0.8s" data-wow-delay=".2s">Vistaar’s portfolio is well diversified across sectors, geographies and offering unique products in line with the company’s long-term policy of de-risking, while meeting customer demands to a maximum.</p>
            </div>
            <div class="sector_sliderOuter">
            <div class="owl-carousel owl-theme sector_sliderSlideBox">
                <div class="item">
                    <div class="sector_slide_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <img src="images/circle.png" style="top:50px; left:20%;" class="floatImg" alt="">
                        <div class="sector_slideBox">
                            <img src="images/partnerpage/sector1.png" class="img1" alt="">
                            <img src="images/partnerpage/sector1.png" class="img2" alt="">
                            <p>Kirana /General Store</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sector_slide_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="sector_slideBox">
                            <img src="images/partnerpage/sector2.png" class="img1" alt="">
                            <img src="images/partnerpage/sector2.png" class="img2" alt="">
                            <p>Hotels & Bakery</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sector_slide_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="sector_slideBox">
                            <img src="images/partnerpage/sector3.png" class="img1" alt="">
                            <img src="images/partnerpage/sector3.png" class="img2" alt="">
                            <p>Power/ Auto/Handloom</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sector_slide_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="sector_slideBox">
                            <img src="images/partnerpage/sector4.png" class="img1" alt="">
                            <img src="images/partnerpage/sector4.png" class="img2" alt="">
                            <p>Home-based Enterprise</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sector_slide_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="sector_slideBox">
                            <img src="images/partnerpage/sector5.png" class="img1" alt="">
                            <img src="images/partnerpage/sector5.png" class="img2" alt="">
                            <p>Shops</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sector_slide_box no_visible wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                        <div class="sector_slideBox">
                            <img src="images/partnerpage/logo_axis.png" class="img1" alt="">
                            <img src="images/partnerpage/logo_axis.png" class="img2" alt="">
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
<script src="js/testimonial.js"></script>
<?php include('includes/footer.php'); ?>