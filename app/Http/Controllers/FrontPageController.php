<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view(view: 'front-home');
    }

    public function about(){
        return view(view:'front-about');
    }
}
