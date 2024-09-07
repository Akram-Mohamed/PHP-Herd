<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


//About Route
//now we will return view intead of string to the about route
Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/aboutString', function () {
    return 'This IS About Page Here :) ';
});

//i can return as json data
Route::get('/jsonform', function () {
    return ['Data' =>'1-2-3-4-5-6'];
});


