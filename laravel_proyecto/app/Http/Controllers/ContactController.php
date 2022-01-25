<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;


class ContactController extends Controller {
    public function index() {
        return view("contact.form");
    }

    public function send() {

    }
}