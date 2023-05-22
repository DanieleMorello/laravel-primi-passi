<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['text' => 'Hello World']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['text' => 'Welcome to About']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['text' => 'Welcome to Contact']);
})->name('contact');
