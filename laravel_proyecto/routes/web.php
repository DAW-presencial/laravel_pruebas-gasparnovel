<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Mail\SendContactForm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["middleware" => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/contact', [ContactController::class, 'index'])->name("contact.index");
    Route::post('/contact', [ContactController::class, "send"])->name("contact.send");

    Route::get('/mailable/contact', function () {
        return new SendContactForm('Motivo' , 'Mensaje');
    });

});

require __DIR__.'/auth.php';
