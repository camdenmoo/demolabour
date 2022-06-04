<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show homepage
    public function home(){
        return view('home');
    }
}
