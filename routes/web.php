<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
