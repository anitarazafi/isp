<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class AdminProgramController extends Controller
{
    public function index(){
        $program = Program::latest()->paginate(15);
        return view('admin.programs.index',
        [
            'title' => "Programs",
            'programs' => $program,
        ]);
    }

    public function create(){
        return view('admin.programs.create',
        [
            'title' => "Create program"
        ]);
    }

    public function store(Request $request){
        $formFields = $request->validate([
           'program_name' => ['required','string','max:255'],
            'faculty' => ['required','string','max:255'],
            'university' => ['required','string','max:255'],
            'degree' => ['required','string','max:255'],
            'city' => ['required','string','max:255'],
            'country' => ['required','string','max:255'],
            'detail' => ['nullable']
        ]);

        $program = Program::create($formFields);

        return redirect('/admin/programs')->with('message', 'Program created');
    }

    public function edit(Program $program){
        return view('admin.programs.edit', [
            'title' => "Edit program",
            'program' => $program,
        ]);
    }

    public function update(Request $request, Program $program){
        $formFields = $request->validate([
            'program_name' => ['required','string','max:255'],
            'faculty' => ['required','string','max:255'],
            'university' => ['required','string','max:255'],
            'degree' => ['required','string','max:255'],
            'city' => ['required','string','max:255'],
            'country' => ['required','string','max:255'],
            'detail' => ['nullable']
        ]);

        $program->update($formFields);

        return redirect('/admin/programs')->with('message', 'Program updated successfully.');
    }

    public function destroy(Program $program) {
        $program->delete();

        return redirect('/admin/programs')->with('message', 'Program deleted successfully.');
    }
}
