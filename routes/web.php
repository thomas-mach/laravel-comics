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
    return view('layouts.app');
})->name('home');

Route::get('/comics', function () {
    return view('partials.comics');
})->name('comics');

Route::get('/contacts', function () {
    return view('partials.contacts');
})->name('contacts');

Route::get('/partials', function () {
    return view('partials.header');
})->name('header');

Route::get('/partials', function () {
    return view('partials.footer');
})->name('footer');
