<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw(
            "Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}",
            function ($mail) {
                $mail->to('jquiachon@cpnc.edu.ph')
                     ->subject('New Contact Message');
            }
        );

        return back()->with('success', 'Message sent successfully!');
    }
}
