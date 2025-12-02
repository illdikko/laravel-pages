<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function accueil(){
        return view('accueil');
    }

    public function about(){
        return view('about');
    }
}
