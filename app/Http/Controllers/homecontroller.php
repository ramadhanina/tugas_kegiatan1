<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return view("home_0183");
    }
    public function artikel(){
        return view("artikel_0183");
    }
    public function contact(){
        return view("contact_0183");
    }
}

