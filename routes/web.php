<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('api/province', 'ApiController@get_all_province');
// Route::post('api/province/add_province', 'ApiController@insert_data_province');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/provinsi', 'ProvinceController@get_all_province')->name('provinsi');
// Route::get('/getCity/ajax/{id}', 'ProvinceController@get_by_id');
Route::get('/kota', 'CityController@get_all_city')->name('kota');
Route::get('/rumah-sakit', 'HospitalController@get_all_hospital')->name('rumah-sakit');