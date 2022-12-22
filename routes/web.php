<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomTypeController;

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
    return view('home');
});

Route::get('admin', function () {
    return view('dashboard');
});
//RoomType controller
Route::get('admin/roomtype/{id}/delete',[RoomTypeController::class,'destroy']);
Route::resource('admin/roomtype',RoomTypeController::class);

//Room controller
Route::get('admin/room/{id}/delete',[RoomController::class,'destroy']);
Route::resource('admin/room',RoomController::class);

//Customer controller
Route::get('admin/customer/{id}/delete',[CustomerController::class,'destroy']);
Route::resource('admin/customer',CustomerController::class);
