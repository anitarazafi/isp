<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminContactMessageController extends Controller
{
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','max:255'],
            'subject' => ['required','string','max:255'],
            'body' => ['required']
        ]);

        $contactMessage = ContactMessage::create($formFields);

        return redirect('/contact')->with('message', 'Message sent successfully. ');
    }

    public function index(){
        $messages = ContactMessage::latest()->paginate(15);
        return view('admin.contact-messages.index', [
            'title' => "Messages from contact form.",
            'messages' => $messages
        ]);
    }
}
