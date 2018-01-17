<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function getUs(){
        return view('us');
    }
    
    public function getAbout(){
        return view('about');
    }
    
    public function getOrder(){
        return view('order');
    }
    
    public function getContact(){
        return view('contact');
    }
}
