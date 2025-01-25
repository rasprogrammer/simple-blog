<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "<h1>Blog website Home Page</h1>";
});


Route::get('/home', function () {
    return view("home");
});