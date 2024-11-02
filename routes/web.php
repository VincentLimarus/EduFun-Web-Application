<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('/about', function() {
    return view("layouts.about");
})->name('about');

Route::get('/category/{id}', [ArticleController::class, 'index'])->name('category');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article');

Route::get('/writer', [WriterController::class, 'index'])->name('writer');

Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writerDetail');
