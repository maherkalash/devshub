<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ setting('site.title') }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ Voyager::image(setting('site.favicon')) }}" type="image/x-icon">
    <link rel="icon" href="{{ Voyager::image(setting('site.favicon')) }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('js/respond.js')}}"></script><![endif]-->
</head>




    @yield('extra-css')

</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>


@include('partials.nav')
@yield('content')
@include('partials.footer')





    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-circle-up"></span>
    </div>
<!-- All js here -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('js/appear.js')}}"></script>
    <script src="{{ asset('js/owl.js')}}"></script>
    <script src="{{ asset('js/wow.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>

@yield('extra-js')
<script>
    function switch_lang (argument) {
        var locale = argument ;
        var _token = $("input[name=_token]").val();
        var _url =  $("input[name=switch_lang_url]").val();
        $.post(_url , { "locale": locale , "_token": _token, "_method" : 'POST' } ,function(msg){
            window.location.reload(true);
        });
    }
</script>
</body>
</html>
