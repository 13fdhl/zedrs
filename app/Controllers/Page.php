<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function dashboard()
    {
        return view('page/dashboard');
    }

    public function profil()
    {
        return view('page/profil');
    }

    public function chatbot()
    {
        return view('page/chatbot');
    }

    public function bantuan()
    {
        return view('page/bantuan');
    }
}