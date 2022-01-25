<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Mail\SendContactForm;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller {
    public function index() {
        return view("contact.form");
    }

    public function send(Request $request) {
        $this->validate($request, [
            "subject" => "required|string|min:5|max:100",
            "message" => "required|string|min:20|max:3000",
        ]);
        Mail::to(User::first())->send(
            new SendContactForm(
                $request->input('subject'),
                $request->input('message'),
            )
        );
    }
}