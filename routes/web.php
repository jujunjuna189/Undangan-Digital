<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public/welcome/welcome');
});

// Theme
Route::get('/theme-1', function () {
    return view('public/template/theme-1/theme-1');
});

Route::get('/theme-2', function () {
    return view('public/template/theme-2/theme-2');
});
