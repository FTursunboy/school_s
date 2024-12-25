<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Отображает шаблон home.blade.php
})->name('home');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');
