<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($lang)
    {
        App::setlocale($lang);
        return view('home');
    }

    public function about($lang)
    {
        App::setlocale($lang);
        return view('about');
    }

    public function services($lang)
    {
        App::setlocale($lang);
        return view('services');
    }
    
    public function serviceDetails($lang)
    {
        App::setlocale($lang);
        return view('serviceDetails');
    }
    public function articleDetails($lang)
    {
        App::setlocale($lang);
        return view('articleDetails');
    }

    public function ourImages($lang)
    {
        App::setlocale($lang);
        return view('ourimages');
    }
    
    public function ourVideos($lang)
    {
        App::setlocale($lang);
        return view('ourvideos');
    }
    public function blog($lang)
    {
        App::setlocale($lang);
        return view('blog');
    }
    public function news($lang)
    {
        App::setlocale($lang);
        return view('news');
    }
    public function contact($lang)
    {
        App::setlocale($lang);
        return view('contact');
    }
    
}
