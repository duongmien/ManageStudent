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

Route::get('/dashboard','AdminController@index');
Route::get('/all-user','AdminController@all_user');
Route::get('/add-user','AdminController@add_user');
Route::post('/edit-user','AdminController@edit_user');

Route::get('/all-khoa','khoaController@viewall_khoa');

