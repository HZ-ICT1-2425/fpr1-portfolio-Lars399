<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/blogpost/experience', function () {
    return view('blogpost.experience');
});

Route::get('/blogpost/feedback', function () {
    return view('blogpost.feedback');
});

Route::get('/blogpost/ictarticle', function () {
    return view('blogpost.ictarticle');
});

Route::get('/blogpost/studychoise', function () {
    return view('blogpost.studychoise');
});

Route::get('/blogpost/swot', function () {
    return view('blogpost.swot');
});
