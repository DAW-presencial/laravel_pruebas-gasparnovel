<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class ContactController extends Controller {
    public function index() {
        return view("contact.form");
    }

    public function send(Request $request) {
        $this->validate($request, [
            "subject" => "required|string|min:5|max:100",
            
        ]);
    }
}