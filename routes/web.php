<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

Route::resource('/',            WelcomeController::class);
Route::resource('dashboard',    DashboardController::class);
route::resource( 'profile',     ProfileController::class);
Route::get('/profile', function () {
    return view('profile');
});


Route::get('/faq', [FaqController::class, 'index'])->name('faq'); // Overzichtspagina

Route::get('/blog', [PostController::class, 'index'])->name('blog'); // Overzichtspagina

Route::get('/posts/{id}', [PostController::class, 'getText']);

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
