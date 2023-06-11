<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function guides(){
        return view('app.guides.index', [
            'title' => "Student guides"
        ]);
    }
}
