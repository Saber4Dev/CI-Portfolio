<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load the appropriate view file for your homepage
        return view('home');
    }
}
