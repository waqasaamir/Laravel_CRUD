<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPI;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController1;
use App\Http\Controllers\FileController;



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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[DummyAPI::class,'getdata']);

Route::get("list/{id?}",[UserController::class,'list']);

Route::post("add",[UserController::class,'add']);
Route::put("update",[UserController::class,'update']);
Route::delete("delete/{id}",[UserController::class,'delete']);
Route::get("search/{name}",[UserController::class,'search']);
Route::post("save",[UserController::class,'testData']);

Route::apiResource("members",UserController1::class);

Route::post("upload",[FileController::class,'upload']);