<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{

    public function accueil()
    {
        return view('accueil');
    }

    public function about()
    {
        return view('about');
    }
}
;
