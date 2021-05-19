<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\NewUser;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function() {
    return view('fall');
});

Route::get('/pizzas', [PizzaController::class,"index"] );

Route::get('pizzas/{id}',[PizzaController::class,"show"]);   


Route::post("use",[NewUser::class,'getdata']);
Route::view("login",'users');

Route::view("home","home");
Route::view("noaccess","noaccess");


Route::group(['middleware'=>['protectPage']],function(){
Route::view("ni","ni");});

Route::get("users", [UserController::class,'index']);

Route::get("list", [MemberController::class,'show']);

Route::view("add", "addmember");
Route::post("add", [MemberController::class,'addData']);

Route::get("delete/{id}",[MemberController::class,'delete']);

Route::get("edit/{id}",[MemberController::class,'showData']);
Route::post("edit",[MemberController::class,'update']);

Route::get("start",[MemberController::class,'operation']);

Route::get("li",[ProductController::class,'li']);