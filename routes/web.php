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
