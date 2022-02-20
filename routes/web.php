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


Route::prefix('home')->group(function(){
    route::get("index",[\App\Http\Controllers\home::class,"index"]);
    route::get("add",[\App\Http\Controllers\home::class,'add']);
    route::post("store",[\App\Http\Controllers\home::class,"store"]);
    route::get("delete/{id}",[\App\Http\Controllers\home::class,"delete"]);
    route::get("edit/{id}",[\App\Http\Controllers\home::class,"edit"]);
    route::post("update",[\App\Http\Controllers\home::class,"update"]);
});
//route::get("/test",);
//route::get("home/index",[\App\Http\Controllers\home::class,"index"]);
//
//route::get("home/add",[\App\Http\Controllers\home::class,'add']);
//
//
//route::post("home/store",[\App\Http\Controllers\home::class,"store"]);
//
//route::get("home/delete/{id}",[\App\Http\Controllers\home::class,"delete"]);
