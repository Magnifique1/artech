<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newuser',  'NewUsersController@index')->name('newuser');
Route::post('/newuser',  'NewUsersController@store')->name('newuser.store');

Route::get('/allusers', 'AllUsersController@index')->name('allusers');

Route::get('/newmember/{group_id}', 'NewMemberController@index')->name('newmember');
Route::post('/newmember', 'NewMemberController@store')->name('newmember.store');

Route::get('/allmembers/{group_id}','AllMembersController@index')->name('allmembers');

Route::get('/memberprofile/{m_id}', 'MembersProfileController@index')->name('memberprofile');
Route::post('/memberprofile', 'MembersProfileController@store')->name('memberprofile.store');
Route::post('/memberprofile-activate', 'MembersProfileController@activate')->name('memberprofile.activate');
Route::post('/memberprofile-deactivate', 'MembersProfileController@deactivate')->name('memberprofile.deactivate');

Route::get('/groups', 'GroupsController@index')->name('groups');
Route::post('/groups', 'GroupsController@store')->name('group.store');

Route::get('/branches','BranchesController@index')->name('branches');
Route::post('/branches','BranchesController@store')->name('branches.store');

Route::get('/userprofile/{u_id}', 'UserProfileController@index')->name('userprofile');

Route::get('/', 'PageController@index')->name('index');
Route::post('/logout', 'PageController@logout')->name('logout');

