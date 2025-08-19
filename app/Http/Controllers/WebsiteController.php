<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function home()
    {
        return view('frontend.home');
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function careers()
    {
        return view('frontend.careers');
    }
    public function blogs()
    {
        return view('frontend.blogs');
    }
    public function blogdetail()
    {
        return view('frontend.blogdetail');
    }
    public function demo()
    {
        return view('frontend.demo');
    }

    public function contactus()
    {
        return view('frontend.contactus');
    }

    public function europe()
    {
        return view('frontend.destinations.europe');
    }
    public function asia()
    {
        return view('frontend.destinations.asia');
    }
    public function dubai()
    {
        return view('frontend.destinations.dubai');
    }
    public function usa()
    {
        return view('frontend.destinations.usa');
    }
    public function canada()
    {
        return view('frontend.destinations.canada');
    }
    public function africa()
    {
        return view('frontend.destinations.africa');
    }

    public function airticketing()
    {
        return view('frontend.services.airticketing');
    }
    public function travelvisa()
    {
        return view('frontend.services.travelvisa');
    }
    public function travelinsurance()
    {
        return view('frontend.services.travelinsurance');
    }
    public function hotelbooking()
    {
        return view('frontend.services.hotelbooking');
    }
    public function holidaypackges()
    {
        return view('frontend.services.holidaypackges');
    }
}
