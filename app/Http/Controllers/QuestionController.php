<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view('app.questions.index', [
            'title' => "Forum"
        ]);
    }

    public function create(){
        return view('app.questions.create', [
            'title' => "Post a question"
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $question = Question::create([
            'user_id' => $request->user()->id,
            'title' => $formFields['title'],
            'body' => $formFields['body']
        ]);

        return redirect('/forum')->with('message', 'Question posted successfully.');
    }
}
