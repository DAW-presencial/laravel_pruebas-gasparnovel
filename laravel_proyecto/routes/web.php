<?php

use App\Http\Controllers\HolaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola/{name}', HolaController::class);
Route::get('/hola/{name}/{surname}', [HolaController::class, "surname"]);
Route::get('/hola/{name}/{surname}/{age}', [HolaController::class, "age"]);