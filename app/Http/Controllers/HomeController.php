<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show home page
    public function index()
    {
        return view('pages.home');
    }
}
