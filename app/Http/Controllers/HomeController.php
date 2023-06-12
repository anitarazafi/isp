<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $guides = Post::where('topic_id', 1)->take(3)->get();
        $posts = Post::where('topic_id', '!=', 1)->take(6)->get();
        $questions = Question::latest()->take(6)->get();

        return view('app.home', [
            'guides' => $guides,
            'posts' => $posts,
            'questions' => $questions
        ]);
    }
}
