<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create_role', 'RoleController@create')->name('create_role');
Route::post('/create_role', 'RoleController@store');

Route::get('/assign_role', 'RoleUserController@create')->name('assign_role');
Route::post('/assign_role', 'RoleUserController@store');

Route::get('/revoke_role', 'RoleUserController@displayRoles')->name('revoke_role');
Route::get('/revoke_role/{id}/{userId}', 'RoleUserController@destroy')->name('revoke.role');

Route::get('/create_permission', 'PermissionController@create')->name('create_permission');
Route::post('/create_permission', 'PermissionController@store');

Route::get('/assign_permission', 'PermissionRoleController@create')->name('assign_permission');
Route::post('/assign_permission', 'PermissionRoleController@store');

Route::get('/revoke_permission', 'PermissionRoleController@displayPermissions')->name('revoke_permission');
Route::get('/revoke_permission/{id}/{userId}', 'PermissionRoleController@destroy')->name('revoke.permission');
