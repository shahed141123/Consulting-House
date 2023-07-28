<?php

namespace App\Http\Controllers\Frontend;

use GeoIP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
       
        return view('frontend.pages.home');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
}
