<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/destro', function () {
    return view('landing');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});