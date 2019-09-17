<!--Main Footer-->
<footer class="main-footer" style="{{ Session::get('locale') == 'en' ? '' : 'text-align: right;direction: rtl;' }}">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{ route('Home') }}">
                                        <img style="max-width: 10%" src="{{ Voyager::image(setting('site.logo')) }}" alt="logo" /></a>
                                </div>


                                <div class="text">{!!   Session::get('locale') == 'en' ? setting('site.footer_desc') : setting('site.footer_desc_ar') !!}</div>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-phone"></span> <div style="{{ Session::get('locale') == 'en' ? '' : 'direction: ltr;display: inline-block;' }}">{{ setting('site.phone')}}</div></li>
                                    <li><span class="icon fa fa-envelope"></span> {{ setting('site.email')}} </li>
                                    <li><span class="icon fa fa-home"></span>{{ Session::get('locale') == 'en' ? setting('site.address') : setting('site.address_ar') }}</li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Links</h4>
                                <ul class="list-link">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="">About us</a></li>
                                    <li><a href="">Testimonials</a></li>
                                    <li><a href="">News</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">

                                <h4>{{translate('site.HelpfulLinks')}}</h4>
                                <ul class="list-link">
                                    <li><a href="{{ route('Home') }}">{{ translate('site.Home') }}</a>   </li>
                                    <li> <a href="E">E</a></li>
                                    <li><a href="{{route('news')}}"> {{ translate('site.News') }}</a></li>
                                    <li><a href="{{route('aboutUs')}}">{{ translate('site.AboutUs') }}</a> </li>
                                    <li><a href="{{route('contact')}}"> {{ translate('site.Contact')}}</a></li>
                                </ul>
                            </div>

                            </div>


                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h4>Gallery</h4>
                                <div class="widget-content">
                                    <div class="images-outer clearfix">
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Copyright Column -->
                    <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright">{{translate('site.RightsReserved')}}</div>
                    </div>

                    <!-- Social Column -->
                    <div class="social-column col-lg-6 col-md-6 col-sm-12">
                        <ul>
                            <li class="follow">{{translate('site.FollowUs')}} </li>

                            <li>  <a href="{{ setting('site.facebook')}}" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
                            <li>   <a href="{{ setting('site.Instagram')}}" target="_blank"><span class="fab fa-instagram-square"></span></a>
                            <li>   <a href="{{ setting('site.youtube')}}" target="_blank"><span class="fab fa-youtube-square"></span></a>
                            <li>  <a href="{{ setting('site.twitter')}}" target="_blank"><span class="fa fa-twitter-square"></span></a></li>
                            <li>  <a href="{{ setting('site.whatsapp')}}" target="_blank"><span class="fab fa-whatsapp-square"></span></a>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>



</footer>

