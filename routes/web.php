<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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


Route::post('/contact-us', function () {
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Send the email to the specified address
    try {
        Mail::to('nsengiyumvawilberforce@gmail.com')->send(new ContactFormMail($data));
        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully! We will get in touch with you.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'There was an error sending your message. Please try again later.'
        ], 500);
    }
})->name('contact-us');

