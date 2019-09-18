<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Slider;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $language = Session::get('locale');
        $slider  = Slider::where('active', true)->first()->translate($language, 'fallbackLocale');;
        
        
        // dd($slider);
        // $sliders = Slider::where('featured', true)->orderBy('order','Asc')->limit(4)->get();//->translate(  $language, 'fallbackLocale');
        // $news = Post::where('featured', true)->orderBy('id','Desc')->limit(4)->get();//->translate(  $language, 'fallbackLocale');
        $title = 'Home';
        return view('home' ,compact(['title' , 'slider']));

    }


    public function changeLanguage(Request $request )
    {
        if($request->ajax() )
        {
            Session::put('locale',  $request->locale);
            app()->setLocale(Session::get('locale'));
        }
    }


}
