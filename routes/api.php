<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use Validator;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/brandlist', function () {
    $brand = DB::select('SELECT sections,brand FROM products group by sections,brand order by 2 asc');
     return response()->json($brand, 200);
});

Route::get('/productlist', function () {
    $brand = DB::select("SELECT * FROM products where front_image != ''");
     return response()->json($brand, 200);
});

