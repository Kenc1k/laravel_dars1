<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/index2', function () {
    return view('index2');
});


Route::get('/index3', function () {
    return view('index3');
});


Route::get('/main', function () {
    return view('main');
});


Route::get('/welcome', function () {
    return view('welcome');
});



