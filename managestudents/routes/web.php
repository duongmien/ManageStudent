<?php

use App\Http\Controllers\khoaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index');
Route::get('/inputinfo','InputInfoController@index');
Route::post('/update-info/{id}','InputInfoController@update_info');

Route::post('/check-login','LoginController@check_login');
Route::get('/logout','LoginController@logout');

//admin
Route::get('/dashboard','AdminController@index');

//admin.user
Route::get('/all-user','UserController@all_user');
Route::get('/add-user','UserController@add_user');
Route::post('/save-user','UserController@save_user');
Route::get('/edit-user/{id}','UserController@edit_user');
Route::post('/update-user/{id}','UserController@update_user');
Route::get('/delete-user/{id}','UserController@delete_user');

// Khoa
Route::get('/all-khoa','khoaController@all_khoa');
Route::get('/add-khoa','khoaController@add_khoa');
Route::get('/edit-khoa','khoaController@edit_khoa');
Route::get('/delete-khoa/{idkhoa}','khoaController@delete_khoa');

// Nganh
Route::get('/all-nganh','NganhController@all_nganh');
Route::get('/delete-nganh/{id}','NganhController@delete_nganh');

// Lop
Route::get('/all-lop','LopController@all_lop');
Route::get('/delete-lop/{id}','LopController@delete_lop');


