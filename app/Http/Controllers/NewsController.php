<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Traits\Translatable;
use Session;

class NewsController extends Controller
{
    public function index()
    {

        $language = Session::get('locale');
        $news = Post::paginate(6);
        $title = 'News';

        return view('news',compact(['news' , 'title']));

    }
    public function singleNews($slug)
    {

        $language = Session::get('locale');
        $post     = Post::where('slug', $slug)->first()->translate(  $language, 'fallbackLocale');
        $title = 'News';


        return view('singleNews' , compact(['post', 'title']));

    }
}
