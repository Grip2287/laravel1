<?php

use App\Http\Controllers\UsersController;
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

Route::get("/",[UsersController::class,"index"]) ->name("index");
Route::get("/regitration",[UsersController::class,"show_reg"]) ->name("reg");
Route::get("/auth",[UsersController::class,"show_auth"]) ->name("auth");
Route::get("/logout",[UsersController::class,"logout"]) ->name("logout");

Route::post("/regitration",[UsersController::class,"signup"]) ->name("regist");
Route::post("/auth",[UsersController::class,"signin"]) ->name("signin");
Route::get("/LK",[UsersController::class,"show_LK"]) ->name("LK");
Route::get("/apll_add",[UsersController::class,"apll_add"]) ->name("apll_add");
Route::post("/apll_add",[UsersController::class,"add_appl"]) ->name("add_appl");


