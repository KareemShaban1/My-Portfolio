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
    return view('frontend.Template2.pages.index');
})->name('template2.home');



Route::get('/dashboard', function () {
    return view('backend.pages.dashboard.index');
})->name('dashboard');

// template 2

Route::get('/template1', function () {
    return view('frontend.Template1.pages.index');
})->name('template1.home');

Route::get('/services', function () {
    return view('frontend.Template1.pages.services');
})->name('template1.services');

Route::get('/portfolio', function () {
    return view('frontend.Template1.pages.portfolio');
})->name('template1.portfolio');

Route::get('/about', function () {
    return view('frontend.Template1.pages.about');
})->name('template1.about');

Route::get('/contact', function () {
    return view('frontend.Template1.pages.contact');
})->name('template1.contact');

Route::get('/blog', function () {
    return view('frontend.Template1.pages.blog');
})->name('template1.blog');