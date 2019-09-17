<header class="main-header {{ $title != 'Home'?  'header-style-two' : '' }}" style="{{ Session::get('locale') == 'en' ? '' : 'text-align: right;direction: rtl;' }}">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="{{ route('Home') }}">
                            <img style="max-width: 30%;" src="{{ Voyager::image(setting('site.logo')) }}" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">


                                <li ><a href="{{ route('Home') }}">{{ translate('site.Home') }}</a></li>
                                <li><a href="services.html">Events</a></li>
                                <li> <a href="{{route('news')}}">{{ translate('site.News') }}</a></li>
                                <li> <a href="{{route('aboutUs')}}">{{ translate('site.AboutUs') }}</a></li>
                                <li><a href="{{route('contact')}}"> {{ translate('site.Contact')}}</a></li>
                                @foreach( config('app.supported_locales')  as  $langKey => $langName )
                                    @if( Session::get('locale') !=  $langKey )

                                        <li> <a style="color: white" onclick="switch_lang('{{ $langKey}}')">{{ $langName }}</a></li>
                                        {{--                           <img style="max-width: 10%" src="img/{{ Session::get('locale') == 'en' ? 'ar' : 'en'}}.png">--}}

                                    @endif
                                @endforeach


                                {{ csrf_field() }}
                                <input type="hidden" name="switch_lang_url" value="{{ route('lang-chooser')}}" >


                            </ul>
                        </div>

                    </nav>

                    <div class="outer-box">
                        <!--Nav Toggler-->
                        <div class="nav-toggler"><div class="nav-btn"><span class="flaticon-menu"></span></div></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('Home') }}" class="img-responsive">
                    <img style="max-width: 30%;" src="{{ Voyager::image(setting('site.logo')) }}" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li ><a href="{{ route('Home') }}">{{ translate('site.Home') }}</a></li>
                            <li><a href="services.html">Events</a></li>
                            <li> <a href="{{route('news')}}">{{ translate('site.News') }}</a></li>
                            <li> <a href="{{route('aboutUs')}}">{{ translate('site.AboutUs') }}</a></li>
                            <li><a href="{{route('contact')}}"> {{ translate('site.Contact')}}</a></li>
                            @foreach( config('app.supported_locales')  as  $langKey => $langName )
                                @if( Session::get('locale') !=  $langKey )

                                    <li> <a style="color: white" onclick="switch_lang('{{ $langKey}}')">{{ $langName }}</a></li>
                                    {{--                           <img style="max-width: 10%" src="img/{{ Session::get('locale') == 'en' ? 'ar' : 'en'}}.png">--}}

                                @endif
                            @endforeach

                               <input type="hidden" name="switch_lang_url" value="{{ route('lang-chooser')}}" >
                               </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
