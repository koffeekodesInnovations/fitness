<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['is_active'] = "home";
        return view('frontend/index', $data);
    }
    public function about()
    {
        $data['is_active'] = "about";
        return view('frontend/about', $data);
    }
    public function services()
    {
        $data['is_active'] = "services";
        return view('frontend/services', $data);
    }
    public function contact()
    {
        $data['is_active'] = "contact";
        return view('frontend/contact', $data);
    }
    public function calculator()
    {
        $data['is_active'] = "calculator";
        return view('frontend/calculator', $data);
    }
    public function gallery()
    {
        $data['is_active'] = "gallery";
        return view('frontend/gallery', $data);
    }
}
