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
}
