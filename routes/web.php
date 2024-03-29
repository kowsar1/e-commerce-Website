<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\UserProfileController;

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

Route::get('/',[Dashboardcontroller::class,'dashboard'])->name('dashboard');
Route::get('/user',[UserProfileController::class,'user'])->name('user');
Route::get('/user/create',[UserProfileController::class,'create'])->name('user.create');
Route::post('/user/store',[UserProfileController::class,'store'])->name('user.store');
