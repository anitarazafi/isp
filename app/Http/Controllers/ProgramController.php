<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        $programs = Program::latest()->filter(request(['search']))->paginate(15)->withQueryString();
        return view('app.programs.index', [
            'title' => "Programs",
           'programs' => $programs,
        ]);
    }

    public function show(Program $program){
        return view('app.programs.show', [
            'program' => $program,
            'title' => $program->program_name,
        ]);
    }
}
