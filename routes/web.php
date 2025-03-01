<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::get('/products', function () {
    return view('layouts.projects');
})->name('projects');


Route::get('/services', function () {
    return view('layouts.services');
})->name('services');

Route::get('/contact-us', function () {
    return view('layouts.contact');
})->name('contact-us');
