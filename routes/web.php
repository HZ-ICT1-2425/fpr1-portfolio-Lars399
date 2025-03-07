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

//Everything related to FAQ and FAQ posts

Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::delete('/faqs/{id}', [FaqController::class, 'destroy'])->name('faqs.destroy');
Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');
Route::put('/faq/{id}', [FaqController::class, 'update'])->name('faq.update');

//Everything related to blogs and blogposts

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/posts/{id}', [PostController::class, 'getText']);
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/blogposts', [PostController::class, 'store'])->name('blogposts.store');
Route::put('/blogposts/{id}', [PostController::class, 'update'])->name('blogposts.update');

