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
Route::get('/delete-user/{id}','UserController@delete_user');

// Khoa
Route::get('/all-khoa','khoaController@all_khoa');
Route::get('/add-khoa','khoaController@add_khoa');
Route::get('/edit-khoa/{idkhoa}','khoaController@edit_khoa');
Route::get('/delete-khoa/{idkhoa}','khoaController@delete_khoa');
Route::post('/save-khoa','khoaController@save_khoa');
Route::post('/update-khoa/{idkhoa}','khoaController@update_khoa');

// Nganh
Route::get('/all-nganh','NganhController@all_nganh');
Route::get('/add-nganh','NganhController@add_nganh');
Route::get('/edit-nganh/{id}','NganhController@edit_nganh');
Route::get('/delete-nganh/{id}','NganhController@delete_nganh');
Route::post('/save-nganh','NganhController@save_nganh');
Route::post('/update-nganh/{id}','NganhController@update_nganh');

// Lop
Route::get('/all-lop','LopController@all_lop');
Route::get('/add-lop','LopController@add_lop');
Route::get('/edit-lop/{id}','LopController@edit_lop');
Route::get('/delete-lop/{id}','LopController@delete_lop');
Route::post('/save-lop','LopController@save_lop');
Route::post('/update-lop/{id}','LopController@update_lop');
    


