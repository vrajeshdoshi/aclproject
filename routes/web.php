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
	$data = array();
	$company = App\Company::get();
	$comp_cnt = count($company);
	//array_push($data, $comp_cnt);
	$countries = App\LocationCity::select('description')->distinct()->get()->count();
	//array_push($data, $countries) ;
	$jobpost_cnt = App\Jobpost::where('verified','yes')->get()->count();
	//array_push($data, $jobpost_cnt);
    return view('welcome', compact('comp_cnt','countries','jobpost_cnt'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/create_role', 'RoleController@create')->name('create_role');
Route::post('/create_role', 'RoleController@store')->name('c_r');

Route::get('/assign_role', 'RoleUserController@create')->name('assign_role');
Route::post('/assign_role', 'RoleUserController@store')->name('a_r');

Route::get('/revoke_role', 'RoleUserController@displayRoles')->name('revoke_role');
Route::get('/revoke_role/{id}/{userId}', 'RoleUserController@destroy')->name('revoke.role');

Route::get('/create_permission', 'PermissionController@create')->name('create_permission');
Route::post('/create_permission', 'PermissionController@store')->name('c_p');

Route::get('/assign_permission', 'PermissionRoleController@create')->name('assign_permission');
Route::post('/assign_permission', 'PermissionRoleController@store')->name('a_p');

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

Route::get('/verify_user/{token}/{id}', 'UserController@activate')->name('verify_user');

Route::get('/register_info', function(){
  return view('register_info');
})->name('reg_info');

Route::get('/verify_staff/{token}/{id}', 'UserController@activate_staff')->name('verify_staff');

Route::put('/set_password/{id}','UserController@store_password')->name('store_password');

Route::get('/display_company/{id}', 'CompanyController@show')->name('display_company');

Route::get('/register_staff', function(){
  return view('register_staff');
})->name('reg_staff');

Route::get('/edit_company/{id}', 'CompanyController@edit')->name('edit_company');
Route::put('/update_company/{id}', 'CompanyController@update')->name('update_company');
Route::get('/delete_company/{id}', 'CompanyController@destroy')->name('delete_company');



