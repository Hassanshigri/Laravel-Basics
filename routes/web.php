<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\bcontroller;

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

// 13 july ---------------------------------------------------------------------

// route::view("about",'/about');
// Route::view("users",'/users');

// Route::get('/users/{name}', function ($name) {
//     return view('user',[users->$name]);
// });

// // this is controller
// Route::get("user/{id}",[UserController::class,'show']);


// 15 july ----------------------------------------------------------------------


// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/user', function () {
    return view('user');
});

Route::POST('/btemp',[bcontroller::class,'loadView']);
Route::POST('/btemp',[bcontroller::class,'getData']);
Route::view('/login','btemp');

// 18 july ----------------------------------------------------------------------------


Route::view('/noaccess','noaccess');
Route::view('/about','about')->middleware('protected');
Route::get('/user',[UserController::class,'index']);
// Route::get('/user',[UserController::class,'index'])->name('user.index');
