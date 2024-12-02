<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function contact(){
        return view('help.contact');
    }

    public function about(){
        return view('help.about');
    }
}