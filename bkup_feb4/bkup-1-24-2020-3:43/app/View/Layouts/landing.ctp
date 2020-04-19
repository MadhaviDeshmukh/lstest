<?php
/**
 * Dashboard home layout.
 * 
 */

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <title><?php echo $this->Session->read('Company.name'); ?></title>
        <!-- Favicon -->
        <link type="image/x-icon" href="<?php echo $this->webroot; ?>img/favicon.gif" rel="shortcut icon"/>
        <!-- Theme Style -->
        <?php
        echo $this->Html->css('landing/css/font-awesome.min.css?' . rand);
        echo $this->Html->css('landing/css/bootstrap.min.css?' . rand);
        //echo $this->Html->css('bootstrap.min.css?' . rand);
        //echo $this->Html->css('style.css?' . rand);
        //echo $this->Html->css('application.css?' . rand);
        //echo $this->Html->css('select2.min.css?' . rand);
        //echo $this->Html->css('jquery-ui.css?' . rand);
        //echo $this->Html->css('bootstrap-timepicker.css?' . rand);
        echo $this->Html->css('landing/css/slick.css?' . rand);
        echo $this->Html->css('landing/css/venobox.css?' . rand);
        echo $this->Html->css('landing/css/style.css?' . rand);
        echo $this->Html->css('landing/css/responsive.css?' . rand);
        ?>
        <!-- Theme JQuery -->
        <?php
        echo $this->Html->script('jquery.min.js?' . rand);
        echo $this->Html->script('bootstrap.min.js?' . rand);
        echo $this->Html->script('scripts.js?' . rand);
        echo $this->Html->script('jquery.nanoscroller.min.js?' . rand);
        echo $this->Html->script('jquery.toaster.js?' . rand);
        echo $this->Html->script('jquery.nestable.js?' . rand);
        echo $this->Html->script('jquery.slimscroll.min.js?' . rand);
        echo $this->Html->script('select2.full.min.js?' . rand);
        echo $this->Html->script('bootstrap-timepicker.min.js?' . rand);
        echo $this->Html->script('jquery-ui.js?' . rand);
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        ?>       
    </head>
</head>



<body id="index1">
    <!-- Preloader Part Start -->
    <div class="preload-main">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader Part End -->

    <!-- HEADER AREA START -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Brandify<b>.</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse menu-main" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu-item">
                    <li class="nav-item">
                        <a class="nav-link" href="#banner">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#comment">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- HEADER AREA END -->

    <!-- BANNER AREA START -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 banner-text">
                    <h3>Worldwide <span>Marketing</span></h3>
                    <h4 class="desh2">trends to look out</h4>
                    <h4 class="desh">For in <span>2019</span></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure earum, tenetur magni quidem fugit</p>
                    <form>
                        <input type="email" class="version2" placeholder="Enter your email">
                        <button type="submit" class="mix-a">Subscription</button>
                    </form>
                    <div class="social-logo">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-9 col-md-8 m-sm-auto m-md-auto">
                    <div class="row xm_top_pa">
                        <div class="col-lg-9 m-auto">
                            <div class="banner-img">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/banner1.jpg" alt="banner-img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- OVERVIEW AREA START -->
    <section id="overview">
        <div class="backtotop">
            <a href="#banner"><i class="fa fa-rocket" aria-hidden="true"></i></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Over<span>view</span></h3>
                    <p>Why People Choice Us Anytime</p>
                </div>
            </div>
            <div class="row pt-5 new-px">
                <div class="col-lg-12 padding-ten">
                    <div class="over-main">
                        <div class="col-lg-4 col-sm-6">
                            <div class="overview-item over1">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <h3>Best Campaign</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus itaque reiciendis dolores</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 hover-bg2">
                            <div class="overview-item over2">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                <h3>Worldwide Marketing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus itaque reiciendis dolores</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="overview-item over3">
                                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                <h3>New Strategy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus itaque reiciendis dolores</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6 md-dis">
                            <div class="overview-item over4">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <h3>All Trusted</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus itaque reiciendis dolores</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OVERVIEW AREA END -->

    <!-- ABOUT AREA START -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Abo<span>ut</span></h3>
                    <p>Let's learn something about ourself</p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-6 col-md-6">
                    <div class="about-img">
                        <img src="https://www.sakibul.com/demos/html/brandify/demo/images/about.jpg" alt="about-img" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 about-text">
                    <span class="add-new">About us</span>
                    <h3>Our Client Satisfaction, Makes Us Pride</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eveniet id commodi suscipit, eius praesentium nemo sapiente aliquam quam excepturi.</p>
                    <p class="about-padd">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam repellat ducimus nostrum facere numquam dolorum.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT AREA END -->

    <!-- FEATURE AREA START -->
    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Fea<span>ture</span></h3>
                    <p>We Are Ruling For Last Decade</p>
                </div>
            </div>
            <div class="row pa-top">
                <div class="col-lg-7">
                    <div class="col-lg-6 col-md-6 ml-auto go-bottom text-center">
                        <div class="fea-item">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            <h4>Online Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati numquam</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="fea-item">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            <h4>Associate Programme</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati numquam</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ml-auto go-top text-center">
                        <div class="fea-item">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h4>Solution & Strategy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati numquam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 feature-text">
                    <span class="add-new">Best One</span>
                    <h3>Explore amazing features</h3>
                    <h4>That will blow your mind!</h4>
                    <p class="p-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nobis accusamus nihil nostrum ad iste laboriosam pariatur</p>
                    <p class="p-b p-b-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nobis accusamus</p>
                    <a href="">Read More</a>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-6 col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f1.jpg" alt="feature-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item remove-border">
                        <span>01.</span>
                        <h3>Our Marketing Strategy Always Rules!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam illo maxime doloremque consequuntur recusandae nesciunt sed ipsa</p>
                        <a href="#">Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-lg-6 xm_dis col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f2.jpg" alt="feature-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item sm_top_ma ">
                        <span>02.</span>
                        <h3>Thirty Days Money Back Guarantee</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam illo maxime doloremque consequuntur recusandae nesciunt sed ipsa</p>
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=nuktTVmoKfc"><i class="fa fa-play" aria-hidden="true"></i>
                            Watch Demo</a>
                    </div>
                </div>
                <div class="col-lg-6 xm_dis2 col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f2.jpg" alt="feature-img" class="img-fluid">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-lg-6 col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f3.jpg" alt="feature-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item fi-color remove-border">
                        <span>03.</span>
                        <h3>Web Customization & Top Ranking</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam illo maxime doloremque consequuntur recusandae nesciunt sed ipsa</p>
                        <a href="#">Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURE AREA END -->

    <!-- COUNT AREA START -->
    <section id="count">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-sm-6 count-item co-1">
                    <h4>107K</h4>
                    <span>Bootcamp</span>
                </div>
                <div class="col-lg-3 col-sm-6 count-item co-2">
                    <h4>56K</h4>
                    <span>New users</span>
                </div>
                <div class="col-lg-3 col-sm-6 count-item co-3">
                    <h4>40K</h4>
                    <span>Job done</span>
                </div>
                <div class="col-lg-3 col-sm-6 count-item co-4">
                    <h4>12</h4>
                    <span>Awards</span>
                </div>
            </div>
        </div>
    </section>
    <!-- COUNT AREA END -->

    <!-- PRICE-PLAN AREA START -->
    <section id="price-plan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Price<span>Plan</span></h3>
                    <p>No Hidden Charge For Our Clients</p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-4 col-sm-8 m-sm-auto col-md-6 text-center">
                    <div class="price-item mm-top2">
                        <h3>Free <b>Pack</b></h3>
                        <i class="fa fa-bicycle" aria-hidden="true"></i>
                        <div class="br">
                            <span>$00/month</span>
                        </div>
                        <p>Only 100 active users daily</p>
                        <p>Marketing strategy</p>
                        <div class="br2">
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 m-sm-auto m-md-auto text-center">
                    <div class="price-item mm-top">
                        <h3>Startup <b>Pack</b></h3>
                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                        <div class="br">
                            <span>$15/month</span>
                        </div>
                        <p>Only 200+ active users daily</p>
                        <p>Local Marketing strategy</p>
                        <p>No weekly updates</p>
                        <p>Limited</p>
                        <div class="br2">
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-sm-auto col-sm-8 text-center">
                    <div class="price-item newpi pi-shadow">
                        <h3>Advance <b>Pack</b></h3>
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                        <div class="br">
                            <span>$35/month</span>
                        </div>
                        <p>10,000+ active users daily Wordwide</p>
                        <p>Build Your Own online Empire</p>
                        <p>Local Marketing strategy</p>
                        <p>Weekly updates & fix</p>
                        <p>Unlimited</p>
                        <div class="br2 br2-active">
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRICE-PLAN AREA END -->

    <!-- COMMENT AREA START -->
    <section id="comment">
        <div class="de-img">
            <div class="de-img2"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Testim<span>onial</span></h3>
                    <p>See What Our Clients Says Worldwide</p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-10 m-auto">
                    <div class="testimonial-shadow">
                        <div class="testimonial-main">
                            <div class="testimonial-item text-center">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fugiat similique quisquam quae maiores quam illum eligendi, quidem repudiandae quaerat, animi inventore quod, dignissimos laboriosam, praesentium. Blanditiis delectus laborum ipsum</p>
                                <h3>Shakib.</h3>
                                <span>Recent Client</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fugiat similique quisquam quae maiores quam illum eligendi, quidem repudiandae quaerat, animi inventore quod, dignissimos laboriosam, praesentium. Blanditiis delectus laborum ipsum</p>
                                <h3>Tahsan.</h3>
                                <span>Recent Client</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fugiat similique quisquam quae maiores quam illum eligendi, quidem repudiandae quaerat, animi inventore quod, dignissimos laboriosam, praesentium. Blanditiis delectus laborum ipsum</p>
                                <h3>Alex.</h3>
                                <span>Recent</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fugiat similique quisquam quae maiores quam illum eligendi, quidem repudiandae quaerat, animi inventore quod, dignissimos laboriosam, praesentium. Blanditiis delectus laborum ipsum</p>
                                <h3>Shuvo.</h3>
                                <span>Recent Client</span>
                            </div>
                        </div>
                        <div class="row pos-bg">
                            <div class="col-lg-3 m-auto">
                                <div class="testimonial-main-img">
                                    <div class="testimonial-img-item text-center">
                                        <img src="https://www.sakibul.com/demos/html/brandify/demo/images/testimonial3.png" alt="user-img" class="img-fluid">
                                    </div>
                                    <div class="testimonial-img-item text-center">
                                        <img src="https://www.sakibul.com/demos/html/brandify/demo/images/testimonial1.png" alt="user-img" class="img-fluid">
                                    </div>
                                    <div class="testimonial-img-item text-center">
                                        <img src="https://www.sakibul.com/demos/html/brandify/demo/images/testimonial3.png" alt="user-img" class="img-fluid">
                                    </div>
                                    <div class="testimonial-img-item text-center">
                                        <img src="https://www.sakibul.com/demos/html/brandify/demo/images/testimonial.png" alt="user-img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COMMENT AREA END -->

    <!-- MARKET AREA START -->
    <div id="market">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="market-main">
                        <div class="col-lg-3">
                            <div class="market-item">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b1.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="market-item text-center">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b2.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="market-item text-center">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b3.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="market-item text-center">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b4.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="market-item text-center">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b5.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="market-item text-center">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b3.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="market-item text-center">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b4.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="market-item text-center">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/b3.png" alt="company-img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MARKET AREA END -->

    <!-- SEO AREA START -->
    <section id="seo">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xm-12 m-auto text-center overview-heading">
                    <div class="seo-box">
                        <h3>S<span>EO</span></h3>
                        <p>Find Your Seo Scores & Ranking Online</p>
                        <div class="col-lg-12 seo-item">
                            <form>
                                <div class="row pt-3">
                                    <div class="col-lg-4 seo-pos">
                                        <input type="url" placeholder="Your website url" class="seo-in">
                                    </div>
                                    <div class="col-lg-4 seo-pos2">
                                        <input type="text" placeholder="Website category " class="seo-in">
                                    </div>
                                    <div class="col-lg-4 seo-p text-center">
                                        <input type="submit" class="seo-btn" value="Free Test!">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEO AREA END -->

    <!--  BLOG AREA START -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Blo<span>gs</span></h3>
                    <p>Some Free Knowledge On Marketing</p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-12">
                    <div class="news-main">
                        <div class="col-lg-4 col-md-6">
                            <div class="news-item-main">
                                <div class="news-items">
                                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/blog1.jpg" alt="news-img" class="img-fluid">
                                    <div class="news-text">
                                        <h4>We Respect Our Marketers</h4>
                                        <span>Posted by Brandify</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed harum, asperiores illo et illum</p>
                                        <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="date-over">
                                        <div class="date-main text-center">
                                            <div class="on-date">
                                                <span>28</span>
                                            </div>
                                            <span>Feb</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="news-item-main">
                                <div class="news-items">
                                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/blog2.jpg" alt="news-img" class="img-fluid">
                                    <div class="news-text">
                                        <h4>How To Increase Traffics</h4>
                                        <span>Posted by Brandify</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed harum, asperiores illo et illum</p>
                                        <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="date-over">
                                        <div class="date-main text-center">
                                            <div class="on-date">
                                                <span>31</span>
                                            </div>
                                            <span>Jan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="news-item-main">
                                <div class="news-items">
                                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/blog3.jpg" alt="news-img" class="img-fluid">
                                    <div class="news-text">
                                        <h4>Our Markting Strategy</h4>
                                        <span>Posted by Brandify</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed harum, asperiores illo et illum</p>
                                        <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="date-over">
                                        <div class="date-main text-center">
                                            <div class="on-date">
                                                <span>05</span>
                                            </div>
                                            <span>Mar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="news-item-main">
                                <div class="news-items">
                                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/blog4.jpg" alt="news-img" class="img-fluid">
                                    <div class="news-text">
                                        <h4>SEO & Affiliate Marketing</h4>
                                        <span>Posted by Brandify</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed harum, asperiores illo et illum</p>
                                        <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="date-over">
                                        <div class="date-main text-center">
                                            <div class="on-date">
                                                <span>17</span>
                                            </div>
                                            <span>Feb</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  BLOG AREA END -->

    <!--  CONTACT AREA START -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Con<span>tact</span></h3>
                    <p>Some Free Knowledge On Marketing</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-6 contact-input">
                            <form>
                                <div class="input-group contact-input mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="input-group contact-input mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email Address" aria-label="Username">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="input-group contact-input mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Phone Number" aria-label="Username">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="input-group contact-input mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Location" aria-label="Username">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
                                </div>
                                <div class="con-btn-main text-center">
                                    <input type="submit" value="Submit Now" class="con-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  CONTACT AREA END -->

    <!-- FOOTER AREA START -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <a class="f-logo" href="#banner"><b>Brandify.</b></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur sit unde facilis. Voluptatibus perspiciatis</p>
                        <p class="no-pa">Lorem ipsum dolor sit amet sit, consectetur adipisicing</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="links">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">overview</a></li>
                            <li><a href="#">feature</a></li>
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Sign up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="location links">
                        <h3>Location</h3>
                        <p><a href="#">Dhanmondi Dhaka, Bangladesh</a></p>
                        <h3>Email</h3>
                        <p>
                            <a href="#">sakibulalam054@gmail.com</a>
                            <a href="#">sakibulalam055@yahoo.com</a>
                        </p>
                        <h3>Website</h3>
                        <p><a href="#">www.sanjusakib.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links pb-2 insta">
                        <h3>Gallery</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2 extra3">
                            <img src="https://www.sakibul.com/demos/html/brandify/demo/images/in1.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2 extra3">
                            <img src="https://www.sakibul.com/demos/html/brandify/demo/images/in2.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2 extra3">
                            <img src="https://www.sakibul.com/demos/html/brandify/demo/images/in3.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2">
                            <img src="https://www.sakibul.com/demos/html/brandify/demo/images/in4.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2">
                            <img src="https://www.sakibul.com/demos/html/brandify/demo/images/in6.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2">
                            <img src="https://www.sakibul.com/demos/html/brandify/demo/images/in5.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- COPY_RIGHT AREA START -->
    <section id="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 moja-loss">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="fop-btm">
                                <h2>Copyright &copy; 2019. All rights reserved by <a href="#">Brandify</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="footer-social newfs">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
	<?php
        echo $this->Html->script('jquery.validate.min.js?' . rand);
        echo $this->Html->script('bootstrap3-typeahead.js?' . rand);
	echo $this->Html->script('application-home.js?q=123456');
        echo $this->Html->script('landing/js/slick.min.js?' . rand);
        echo $this->Html->script('landing/js/venobox.min.js?' . rand);
        echo $this->Html->script('landing/js/custom.js?' . rand);
	?>
</body>

</html>



<?php /*

<!DOCTYPE html>
<html lang="en">
    <head>       
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo $this->Session->read('Company.name'); ?></title>
        <!-- Favicon -->
        <link type="image/x-icon" href="<?php echo $this->webroot; ?>img/favicon.gif" rel="shortcut icon"/>
        <!-- Theme Style -->
        <?php
        echo $this->Html->css('bootstrap.min.css?' . rand);
        echo $this->Html->css('font-awesome.css?' . rand);
        echo $this->Html->css('style.css?' . rand);
        echo $this->Html->css('application.css?' . rand);
        echo $this->Html->css('select2.min.css?' . rand);
        echo $this->Html->css('jquery-ui.css?' . rand);
        echo $this->Html->css('bootstrap-timepicker.css?' . rand);
        echo $this->Html->css('landing/css/slick.css?' . rand);
        ?>
        <!-- Theme JQuery -->
        <?php
        echo $this->Html->script('jquery.min.js?' . rand);
        echo $this->Html->script('bootstrap.min.js?' . rand);
        echo $this->Html->script('scripts.js?' . rand);
        echo $this->Html->script('jquery.nanoscroller.min.js?' . rand);
        echo $this->Html->script('jquery.toaster.js?' . rand);
        echo $this->Html->script('jquery.nestable.js?' . rand);
        echo $this->Html->script('jquery.slimscroll.min.js?' . rand);
        echo $this->Html->script('select2.full.min.js?' . rand);
        echo $this->Html->script('bootstrap-timepicker.min.js?' . rand);
        echo $this->Html->script('jquery-ui.js?' . rand);
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        ?>       
    </head>
    <body class="theme-whbl  pace-done fixed-header">
        <div id="theme-wrapper">
            <!-- Header Section-->
            <?php echo $this->element('header'); ?>
            <!-- End Header Section-->
            <div class="container  nav-small" id="page-wrapper">
                <div class="row">
                    <!-- Sidebar Section-->
                    <?php echo $this->element('sidebar'); ?>
                    <!-- End Sidebar Section-->
                    <!-- Main Content -->
                    <div id="content-wrapper" class="manager-home">
                        <div class="loader"></div>
                        <!-- Alert Message-->
                        <?php
                        echo $this->Session->flash('fail');
                        echo $this->Session->flash('success');
                        ?> 
                        <!-- End Alert Message-->
                        <?php echo $this->Form->input('base_url', array('type' => 'hidden', 'value' => $this->webroot)); ?>
                        <?php echo $content_for_layout; ?> 
                        <!-- Footer Section -->
                        <footer class="row" id="footer-bar" >                          
			    <p class="col-xs-12" id="footer-copyright">
                            </p>
                        </footer>
                        <!-- End Footer Section -->
                    </div>
                    <!-- End Main Content -->
                </div>
            </div>
        </div>	
        <!-- Theme JQuery -->
        <?php
        echo $this->Html->script('jquery.validate.min.js?' . rand);
        echo $this->Html->script('bootstrap3-typeahead.js?' . rand);
        echo $this->Html->script('application-home.js?q=123456');

        ?>
        <!-- End Theme JQuery -->
    </body>
    </html>

 */ ?>

