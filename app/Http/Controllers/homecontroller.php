<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return view("home0183");
    }

    public function artikel(){
        return view("artikel0183");
    }
}

