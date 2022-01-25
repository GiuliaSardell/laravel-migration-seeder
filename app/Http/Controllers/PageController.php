<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function trip(){
        return view('trip');
    }

    public function link(){
        return view('link');
    }

}
