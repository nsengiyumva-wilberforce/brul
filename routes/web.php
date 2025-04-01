<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

Route::get('/', function () {
    $news = News::take(4)->get(); // Gets the first 4 records
    return view('layouts.home', compact('news'));
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

Route::get('/blog', function () {
    $news = News::paginate(25);

    return view('layouts.news', compact('news'));
})->name('blog');

Route::get('/news-detail/{id}', function ($id) {
    $recent = News::whereNot('id', $id)
        ->select('title', 'created_at', 'id') // Select only needed columns
        ->latest() // Order by latest entries
        ->get();
    $details = News::findOrFail($id);
    return view('layouts.blog-details', compact('details', 'recent'));
})->name('blog.details');


Route::post('/contact-us-email', function () {
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Send the email to the specified address
    try {
        Mail::to('info@blessedriverstones.co.ug')->send(new ContactFormMail($data));
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
})->name('contact-us-email');

