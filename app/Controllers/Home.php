<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('frontend/index');
    }
    public function about()
    {
        return view('frontend/about');
    }
    public function services()
    {
        return view('frontend/services');
    }
    public function contact()
    {
        return view('frontend/contact');
    }
    public function calculator()
    {
        return view('frontend/calculator');
    }
}
