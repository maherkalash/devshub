@extends('layout')
@section('title', translate('site.Contact'))
@section('content')
    @component('breadcrumb' , [ 'title' => translate('site.AboutUs')])
        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{translate('site.Home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{translate('site.AboutUs')}}</li>
    @endcomponent

    <!-- Banner Area Start -->
    <div class="banner-area banner-one-area fix pt-60 pb-80">
        <div class="container" style="max-width: 900px">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="banner-text pt-130" style="    text-align: center;">
                        <h1>{{translate('site.AboutUs')}}</h1>
                        <p>{!!  Session::get('locale') == 'en' ? setting('site.about_description') : setting('site.about_description_ar') !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->





@endsection
