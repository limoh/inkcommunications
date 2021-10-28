<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about-us");
    }

    public function contact()
    {
        return view("contact-us");
    }

    public function seo()
    {
        return view("search-engine-optimization");
    }

    public function web()
    {
        return view("web-design");
    }

    public function digital()
    {
        return view("digital-marketing");
    }

    public function ecommerce()
    {
        return view("e-commerce");
    }

    public function copywriting()
    {
       return view("copywriting");
    }

    public function content()
    {
       return view("content-writing");
    }
}
