<?php

namespace App\Http\Controllers;

class HolaController extends Controller {
    public function __invoke(string $name) {
        return "Hola $name";
    }

    public function surname(string $name, string $surname) {
        return "Hola $name $surname";
    }

    public function age(string $name, string $surname, string $age) {
        return view("age", compact("age"));
    }
}