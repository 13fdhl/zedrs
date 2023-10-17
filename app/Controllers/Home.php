<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('page/beranda');
    }

    public function dashboard()
    {
        return view('page/dashboard');
    }
}
