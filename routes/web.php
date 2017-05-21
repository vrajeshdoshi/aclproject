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

Route::get('seeker_dashboard', 'SeekerController@dashboard');

Route::post('/register_company', 'CompanyController@store')->name('register_company');

Route::get('/create_post', 'JobpostController@create')->name('create_post');
Route::post('/create_post', 'JobpostController@store')->name('create_post_store');

Route::get('/display_posts', 'JobpostController@display')->name('display_posts');
Route::get('/display_verified_posts', 'JobpostController@display_verified')->name('display_verified_posts');

Route::get('/my_posts/{id}','JobpostController@show')->name('my_posts');

Route::get('/edit_post/{id}', 'JobpostController@edit')->name('edit_post');
Route::put('/update_post/{id}', 'JobpostController@update')->name('update_post');

Route::get('/delete_jobpost/{id}', 'JobpostController@destroy')->name('delete_jobpost');


Route::get('/create_user', 'UserController@create')->name('create_user');
Route::post('/create_user', 'UserController@store')->name('create_user_store');

Route::get('/display_users', 'UserController@display')->name('display_users');

Route::get('/edit_user/{id}', 'UserController@edit')->name('edit_user');
Route::put('/update_user/{id}', 'UserController@update')->name('update_user');

Route::get('/delete_user/{id}', 'UserController@destroy')->name('delete_user');


Route::get('/create_jobtype', 'JobtypeController@create')->name('create_jobtype');
Route::post('/create_jobtype', 'JobtypeController@store')->name('create_jobtype_store');

Route::get('/display_jobtypes', 'JobtypeController@display')->name('display_jobtypes');

Route::get('/edit_jobtype/{id}', 'JobtypeController@edit')->name('edit_jobtype');
Route::put('/update_jobtype/{id}', 'JobtypeController@update')->name('update_jobtype');

Route::get('/delete_jobtype/{id}', 'JobtypeController@destroy')->name('delete_jobtype');


Route::get('/create_category', 'CategoryController@create')->name('create_category');
Route::post('/create_category', 'CategoryController@store')->name('create_category_store');

Route::get('/display_categories', 'CategoryController@display')->name('display_categories');

Route::get('/edit_category/{id}', 'CategoryController@edit')->name('edit_category');
Route::put('/update_category/{id}', 'CategoryController@update')->name('update_category');

Route::get('/delete_category/{id}', 'CategoryController@destroy')->name('delete_category');

Route::get('/create_location', 'LocationCityController@create')->name('create_location');
Route::post('/create_location', 'LocationCityController@store')->name('create_location_store');

Route::get('/display_locations', 'LocationCityController@display')->name('display_locations');

Route::get('/edit_location/{id}', 'LocationCityController@edit')->name('edit_location');
Route::put('/update_location/{id}', 'LocationCityController@update')->name('update_location');

Route::get('/delete_location/{id}', 'LocationCityController@destroy')->name('delete_location');