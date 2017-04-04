<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('home.index');
    }
    
    public function getProducts(){
        return view('home.products');
    }
    
    public function getAboutUs(){
        return view ('home.aboutus');
    }
}
