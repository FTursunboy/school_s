<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Отображает шаблон home.blade.php
});
Route::get('/news', function () {
    return view('news'); // Отображает представление news.blade.php
});
Route::get('/about', function () {
    return view('about'); // Отображает представление 
});
Route::get('/contact', function () {
    return view('contact'); // Отображает представление 
});
Route::get('/schedule', function () {
    return view('schedule'); // Отображает представление 
});