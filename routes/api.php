<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/province', 'ProvinceController@get_all_province');
Route::get('/province/{id}', 'ProvinceController@get_by_id');
Route::post('/province', 'ProvinceController@insert_data_province');
Route::put('/province/{id}', 'ProvinceController@update_data_province');
Route::delete('/province/{id}', 'ProvinceController@delete_data_province');

// Route::post('/products', function () {
//     return response()->json(
//         [
//             "message" => "POST method success"
//         ]
//     );
// });

// Route::put('/products/{id}', function ($id) {
//     return response()->json(
//         [
//             "message" => "PUT method success " . $id
//         ]
//     );
// });

// Route::delete('/products/{id}', function ($id) {
//     return response()->json(
//         [
//             "message" => "DELETE method success " . $id
//         ]
//     );
// });
