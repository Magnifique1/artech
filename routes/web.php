<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/newuser', function () {
    return view('newuser');
});

Route::get('/allusers', function () {
    return view('allusers');
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

Route::get('/newgroup', function () {
    return view('newgroup');
});
