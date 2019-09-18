@extends('layout')
@section('title', translate('site.Home'))
@section('content')


    <!--Banner Section-->
    
    <section class="banner-section" id="home-banner" style="background-image:url( {{voyager::image($slider->first_image)}} )">
        <div class="auto-container">
            <div class="clearfix">
                <div class="content">
                    <h1> {{ $slider->title }} </h1>
                    <div class="text">  {{ $slider->description }}</div>
                    <a href="{{ $slider->link }}" class="theme-btn btn-style-one">{{ $slider->link_text }} </a>
                </div>
                <div class="image-box">
                    <figure class="image">
                        <img src="{{ voyager::image($slider->second_image) }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section-->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">we help you</div>
                <h2>Most prominent side is <br> our devoted <span>fervices</span></h2>
            </div>

            <div class="row clearfix">

                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="images/resource/service-1.png" alt="" /></span>
                        </div>
                        <h5><a href="services-single.html">Fully Responsive for <br> all devices</a></h5>
                        <div class="text">We use a customized application specifically designed a testing gnose to keep away for people.</div>
                        <a href="services-single.html" class="plus-box fa fa-plus"></a>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="images/resource/service-2.png" alt="" /></span>
                        </div>
                        <h5><a href="services-single.html">SEO Friendly and <br> Optimized</a></h5>
                        <div class="text">We use a customized application specifically designed a testing gnose to keep away for people.</div>
                        <a href="services-single.html" class="plus-box fa fa-plus"></a>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="images/resource/service-3.png" alt="" /></span>
                        </div>
                        <h5><a href="services-single.html">Super Fast and <br> Secure</a></h5>
                        <div class="text">We use a customized application specifically designed a testing gnose to keep away for people.</div>
                        <a href="services-single.html" class="plus-box fa fa-plus"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!--Fluid Section One-->
    <section class="fluid-section-one">
        <div class="image-layer" style="background-image:url(images/background/15.png)"></div>
        <div class="outer-container clearfix">

            <!--Image Column-->
            <div class="image-column">
                <figure class="image-box"><img src="images/resource/image-1.png" alt=""></figure>
            </div>

            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <div class="title">we are pixer </div>
                        <h2>we are happy to assist <br> you all time <span>moment</span></h2>
                    </div>
                    <div class="bold-text">The purpose of lorem ipsum is to create</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dui orci, sodales a pellentesque vel, pharetra quis elit. In scelerisque lacinia diam eget egestas. Etiam non dui eu felis vestibulum.</div>
                    <!--Skills-->
                    <div class="skills">

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">HTML</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="50">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="50"></div></div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">php</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Css</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="70">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="70"></div></div>
                            </div>
                        </div>

                    </div>

                    <!-- Author Box -->
                    <div class="author-box">
                        <div class="box-inner">
                            <div class="image"><img src="images/resource/author-1.png" alt="" /></div>
                            <h3>Dntuli Frek</h3>
                            <div class="designation">Founden & CEO</div>
                            <div class="signature"><img src="images/icons/signature.png" alt="" /></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">we help you</div>
                <h2>Most prominent side is <br> our devoted services <span>fetures</span></h2>
            </div>

            <!--Video Box-->
            <div class="video-box">
                <div class="title">Pixer</div>
                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
                <div class="side-image">
                    <img src="images/resource/side-img.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- End Video Section -->

    <!-- Steps Section -->
    <section class="steps-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Steps for done</div>
                <h2>Easy steps to do <br> consult with us <span>us</span></h2>
            </div>

            <div class="outer-container">
                <div class="row clearfix">

                    <!-- Services Block Two -->
                    <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-contact"></span>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Contact us first</a></h5>
                                <div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
                                <a class="contact" href="#">Contact us</a>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block Two -->
                    <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-network-1"></span>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Consult with us</a></h5>
                                <div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
                                <a class="contact" href="#">Appoinment</a>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block Two -->
                    <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-target"></span>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Place Order</a></h5>
                                <div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
                                <a class="contact" href="#">Order now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block Two -->
                    <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-banknote"></span>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h5><a href="#">Make Payment</a></h5>
                                <div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
                                <a class="contact" href="#">Payment</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Steps Section -->

    <!-- Price Section -->
    <section class="pricing-section" style="background-image:url(images/background/3.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">we help you</div>
                <h2>Most prominent side is <br> our devoted <span>fetures</span></h2>
            </div>

            <!--Pricing Info Tabs-->
            <div class="pricing-info-tabs">
                <!--Pricing Tabs-->
                <div class="pricing-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#package-monthly" class="tab-btn active-btn"><span class="circle"></span> Monthly</li>
                        <li data-tab="#package-yearly" class="tab-btn"><span class="circle"></span> Yearly <span class="save">Save 20%</span></li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="package-monthly">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Basic Plan</h5>
                                                <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                            </div>
                                            <div class="price">$29 <span>/ monthly</span></div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li>24/7 system monitoring</li>
                                                    <li class="style-two">Security management</li>
                                                    <li>Secure finance backup</li>
                                                    <li>Remote support</li>
                                                </ul>
                                                <a href="#" class="theme-btn btn-style-two">Get a free trial</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="recomend">Recommended</div>
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Standard Plan</h5>
                                                <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                            </div>
                                            <div class="price">$49 <span>/ monthly</span></div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li>24/7 system monitoring</li>
                                                    <li class="style-two">Security management</li>
                                                    <li>Secure finance backup</li>
                                                    <li class="style-two">Remote support</li>
                                                </ul>
                                                <a href="#" class="theme-btn btn-style-two">Get a free trial</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-4 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Extended Plan</h5>
                                                <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                            </div>
                                            <div class="price">$59 <span>/ monthly</span></div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li class="style-two">24/7 system monitoring</li>
                                                    <li>Security management</li>
                                                    <li>Secure finance backup</li>
                                                    <li class="style-two">Remote support</li>
                                                </ul>
                                                <a href="#" class="theme-btn btn-style-two">Get a free trial</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="package-yearly">
                            <div class="content">

                                <div class="row clearfix">

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Basic Plan</h5>
                                                <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                            </div>
                                            <div class="price">$79 <span>/ monthly</span></div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li>24/7 system monitoring</li>
                                                    <li>Security management</li>
                                                    <li>Secure finance backup</li>
                                                    <li class="style-two">Remote support</li>
                                                </ul>
                                                <a href="#" class="theme-btn btn-style-two">Get a free trial</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="recomend">Recommended</div>
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Standard Plan</h5>
                                                <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                            </div>
                                            <div class="price">$89 <span>/ monthly</span></div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li>24/7 system monitoring</li>
                                                    <li class="style-two">Security management</li>
                                                    <li>Secure finance backup</li>
                                                    <li>Remote support</li>
                                                </ul>
                                                <a href="#" class="theme-btn btn-style-two">Get a free trial</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block col-lg-4 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Extended Plan</h5>
                                                <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                            </div>
                                            <div class="price">$99 <span>/ monthly</span></div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li class="style-two">24/7 system monitoring</li>
                                                    <li>Security management</li>
                                                    <li class="style-two">Secure finance backup</li>
                                                    <li>Remote support</li>
                                                </ul>
                                                <a href="#" class="theme-btn btn-style-two">Get a free trial</a>
                                            </div>
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
    <!-- End Price Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="image-layer" style="background-image:url(images/background/14.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title">Tetimonils</div>
                <h2>what clients say about <br> our <span>services</span></h2>
            </div>
        </div>

        <div class="outer-container clearfix">

            <!--Image Column-->
            <div class="image-column">
                <figure class="image-box"><img src="images/resource/author-12.png" alt=""></figure>
            </div>

            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">

                    <div class="testimonial-carousel owl-carousel owl-theme">

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="upper-inner">
                                        <div class="image"><img src="images/resource/author-2.png" alt="" /></div>
                                        <h5>Frederic Anderson</h5>
                                        <div class="designation">President</div>
                                    </div>
                                    <div class="text">Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic. </div>
                                </div>
                                <div class="quote flaticon-quotations"></div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="upper-inner">
                                        <div class="image"><img src="images/resource/author-3.png" alt="" /></div>
                                        <h5>Frederic Anderson</h5>
                                        <div class="designation">President</div>
                                    </div>
                                    <div class="text">Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic. </div>
                                </div>
                                <div class="quote flaticon-quotations"></div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="upper-inner">
                                        <div class="image"><img src="images/resource/author-2.png" alt="" /></div>
                                        <h5>Frederic Anderson</h5>
                                        <div class="designation">President</div>
                                    </div>
                                    <div class="text">Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic. </div>
                                </div>
                                <div class="quote flaticon-quotations"></div>
                            </div>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="upper-inner">
                                        <div class="image"><img src="images/resource/author-3.png" alt="" /></div>
                                        <h5>Frederic Anderson</h5>
                                        <div class="designation">President</div>
                                    </div>
                                    <div class="text">Cookies are set through this site to recognise your repeat visits and preferences, serve more relevant ads, facilitate social sharing, and to  violanalyse traffic. </div>
                                </div>
                                <div class="quote flaticon-quotations"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- End Testimonial Section -->

    <!--Sponsors Section-->
    <section class="sponsors-section style-one">
        <div class="auto-container">

            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Sponsors Section-->

    <!-- Moments Section -->
    <section class="moment-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="images/resource/moment.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">we are pixer</div>
                            <h2>we are happy to assist <br> you all time <span>moment</span></h2>
                        </div>
                        <div class="text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed. So some forward-looking CIOs are putting.</div>

                        <!--Accordian Box-->
                        <ul class="accordion-box">

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Solutions is the latest software Sigma?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Machine learning shows potential to leverage?</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            <p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>So some forward-looking CIOs are putting?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Moments Section -->

    <!--Fun Facts Section-->
    <div class="fact-counter-section">
        <div class="fact-counter">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="2100">0</span>+
                                <h6 class="counter-title">Works done</h6>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="75">0</span>+
                                <h6 class="counter-title">Works done</h6>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="15">0</span>+
                                <h6 class="counter-title">Years Experience</h6>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="1600">0</span>+
                                <h6 class="counter-title">Happy clients</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Our expert team</div>
                <h2>We re dedic <br> our devoted services <span>fetures</span></h2>
            </div>

            <div class="row clearfix">

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="" />
                        </div>
                        <h5>Suresh Bollom</h5>
                        <div class="designation">Former Developer</div>
                        <ul class="social-nav">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="" />
                        </div>
                        <h5>Alina Jia</h5>
                        <div class="designation">Former Developer</div>
                        <ul class="social-nav">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="" />
                        </div>
                        <h5>Domina Li</h5>
                        <div class="designation">Designer</div>
                        <ul class="social-nav">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="" />
                        </div>
                        <h5>Michael Scott</h5>
                        <div class="designation">Former Developer</div>
                        <ul class="social-nav">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-behance"></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Our expert team</div>
                <h2>We re dedic <br> our devoted srv <span>fetures</span></h2>
            </div>

            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-single.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h6><a href="blog-single.html">Top aide to possible contender forced to resign over creepy.</a></h6>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="author">
                                        <div class="image"><img src="images/resource/author-4.jpg" alt="" /></div>
                                        Rio Smith
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="post-time">10 hours ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-single.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h6><a href="blog-single.html">Thirty-two surrogate mothers charged with human trafficking.</a></h6>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="author">
                                        <div class="image"><img src="images/resource/author-5.jpg" alt="" /></div>
                                        Jhonny Rip
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="post-time">5 hours ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-single.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h6><a href="blog-single.html">Chinese clients have been released after agreeing to keep.</a></h6>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="author">
                                        <div class="image"><img src="images/resource/author-6.jpg" alt="" /></div>
                                        Mong Wanzhou
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="post-time">12 hours ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Contact Form Box -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="icons-one"></div>
                <div class="icons-two"></div>
                <h3>Have any job for our company? <br> Just connect with us.</h3>

                <!-- Default Form -->
                <div class="default-form">
                    <form method="post" action="blog.html">
                        <div class="row clearfix">

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Your name *" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Your email *" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="subject" placeholder="Subject *" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Message *"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Contact with us</button>
                            </div>

                        </div>
                    </form>

                </div>
                <!--End Default Form -->
                <div class="side-image wow rubberBand" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <img src="images/resource/form-icon.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form Box -->
@endsection
