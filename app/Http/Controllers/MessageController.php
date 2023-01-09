<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request) {
        $message = $request->validate(
            [
                'name' => 'required',
                'email' => ['required','email'],
                'subject' => 'required',
                'content' => 'required'
            ]
        );

        //Mail::to('cigotete@gmail.com')->send(new MessageReceived($msg));
        Mail::to('cigotete@gmail.com')->queue(new MessageReceived($message)); //uses queue

        //return "datos validados";
        return new MessageReceived($message);
    }
}
