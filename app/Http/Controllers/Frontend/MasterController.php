<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {

        // return view('frontend.layout.master');
        return view('frontend.pages.home');
    }
    public function about_us()
    {
        return view('frontend.pages.about');
    }

    public function seed_processing()
    {
        return view('frontend.pages.services.seed_processing');
    }

    public function seed_packaging()
    {
        return view('frontend.pages.services.seed_packaging');
    }

    public function transport()
    {
        return view('frontend.pages.services.transport');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function clients()
    {
        return view('frontend.pages.clients');
    }
}
