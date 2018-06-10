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

Route::get("/login", ["as" => "login", "uses" => "LoginController@index"]);
Route::post("/login", "LoginController@login");

Route::get("/", "PageController@index")->middleware("auth");
Route::get("/posts", "PostController@index")->middleware("auth");
Route::get("/posts/create", "PostController@create")->middleware("auth");
Route::post("/posts", "PostController@store")->middleware("auth");
Route::get("/categories", "CategoryController@index")->middleware("auth");