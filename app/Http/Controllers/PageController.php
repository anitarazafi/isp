<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('app.about', [
            'title' => "About"
        ]);
    }

    public function contact(){
        return view('app.contact', [
            'title' => "Contact us"
        ]);
    }

}
