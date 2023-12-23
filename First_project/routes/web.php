<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {//rout --- method (tow paranmetar : the bath, result(function) the function in controla rview:the name of page
    return view('login');
});
Route::post('/register', [UserController::class,'register']);//[name of the class,name of the method]
Route::post('/logout',[UserController::class,'logout']);
Route::post('/login',[UserController::class,'login']);
