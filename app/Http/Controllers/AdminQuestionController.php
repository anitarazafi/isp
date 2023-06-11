<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class AdminQuestionController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->paginate(15);
        return view('admin.questions.index', [
            'title' => "Questions",
            'questions' => $questions
        ]);
    }

    public function edit(Question $question)
    {
        return view('admin.questions.edit', [
            'title' => "Edit question",
            'question' => $question
        ]);
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $question->update($request->all());

        return redirect('/admin/questions')->with('message', 'Question updated successfully.');
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect('/admin/questions')->with('message', 'Question deleted successfully.');
    }
}
