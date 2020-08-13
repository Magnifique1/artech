<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/newuser',  'NewUsersController@index')->name('newuser');
Route::post('/newuser',  'NewUsersController@store')->name('newuser.store');

Route::get('/allusers', 'AllUsersController@index')->name('allusers');

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

Route::get('/groups', 'GroupsController@index')->name('groups');
Route::post('/groups', 'GroupsController@store')->name('group.store');

Route::get('/branches','BranchesController@index')->name('branches');
Route::post('/branches','BranchesController@store')->name('branches.store');
