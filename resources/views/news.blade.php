@extends('layout')
@section('title', translate('site.News'))
@section('content')



    @component('breadcrumb' , [ 'title' => translate('site.News')])
        <li><a href="{{ url('/') }}">{{translate('site.Home')}}</a></li>
        <li>{{translate('site.News')}}</li>
    @endcomponent
    <!-- Post Area Start -->
    <div class="post-area blog-area pt-40 pb-40 blog-column-3" style="{{ Session::get('locale') == 'en' ? '' : 'text-align: right;direction: rtl;' }}">
        <div class="container">
            <div class="row text-center">
                @foreach($news as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="{{ route('singlenews', ['slug' => $item->slug ]) }}">
                                    <img src="{{ Voyager::image($item->image) }}">
                                </a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="{{ route('singlenews', ['slug' => $item->slug ]) }}">{{ $item->title }}</a></h4>

                                <p> {{ $item->excerpt  }}</p>
                                <div class="post-meta">

                                    <span class="post-date">  {{$item->created_at}}</span>
                                </div>
                                <a href="{{ route('singlenews', ['slug' => $item->slug ]) }}" class="default-btn">{{translate('site.ReadMore')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-wrapper">
                <nav aria-label="navigation">
                    {{ $news->links() }}
                </nav>
            </div>
        </div>
    </div>
    <!-- Post Area End -->
@endsection
