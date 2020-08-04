<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/newbdo', function () {
    return view('newbdo');
});

Route::get('/allbdo', function () {
    return view('allbdo');
});

Route::get('/newmember', function () {
    return view('newmember');
});

Route::get('/allmembers', function () {
    return view('allmembers');
});

Route::get('/bdoprofile', function () {
    return view('bdoprofile');
});

Route::get('/memberprofile', function () {
    return view('memberprofile');
});
