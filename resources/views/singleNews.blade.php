@extends('layout')
@section('title', translate('site.News'))
@section('content')
@section('extra-css')

@endsection
@component('breadcrumb' , [ 'title' => translate('site.News')])
    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{translate('site.Home')}}</a></li>
    <li class="breadcrumb-item"><a href="{{route('news')}}">{{translate('site.News')}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{translate('site.News')}}</li>
@endcomponent
<!-- Post Area Start -->
<div class="post-area blog-area pt-40 pb-40 post-details" style="{{ Session::get('locale') == 'en' ? '' : 'text-align: right;direction: rtl;' }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="single-post-item text-center pb-70">

                    <div class="single-post-img">
                        <img src="{{ Voyager::image($post->image) }}">
                    </div>
                    <h3 class="single-post-title">
                        <a href="#">{{ $post->title }}</a>
                    </h3>
                    <div class="single-post-meta">
                        {{--                  <span> {{translate('site.postby')}} : {{ $post->author_id}}</span>--}}
                        <span> {{translate('site.createdAt')}} : {{ $post->created_at}}</span>
                    </div>
                    <div class="single-post-info-text text-left">
                        <p> {!! $post->body !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Post Area End -->
@endsection
