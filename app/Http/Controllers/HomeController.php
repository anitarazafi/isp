<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $guides = Post::where('topic_id', 1)->take(3)->get();
        $posts = Post::where('topic_id', '!=', 1)->take(6)->get();

        return view('app.home', [
            'guides' => $guides,
            'posts' => $posts
        ]);
    }
}
