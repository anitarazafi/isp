<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request, Question $question){
        $formFields = $request->validate([
           'body' => ['required']
        ]);

        $answer = Answer::create([
            'user_id' => $request->user()->id,
            'question_id' => $question->id,
            'body' => $formFields['body']
        ]);

        return redirect('/forum')->with('message', 'Answer posted successfully.');
    }
}
