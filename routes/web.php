<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    dd(Auth::check());
});
Route::get('home', function(){
    return view('home');    
});
Route::get('welcome', function(){
    return view('welcome');
});
Route::get('unit', function(){
    return view('unit');
});
Route::get('play', function(){
    return view('play');
});
Route::get('admin', function(){
    return view('admin');
});
Route::get('login',[LoginController::class, "index"]);
Route::post('login',[LoginController::class, "login"]);
Route::post('logout',[LoginController::class, "logout"]);
