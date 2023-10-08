<?php

use App\Http\Controllers\ControlEmployee;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControlUser;
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



Route::controller(ControlUser::class)->group(function(){
    Route::get('/login','Login')->name('login');
});






Route::controller(ControlEmployee::class)->group(function(){

    Route::get('/admin','admin')->name('formAdmin');

    Route::get('/formEmployee','register')->name('formEmployee');

    Route::get('/formRecord','recordEmployee')->name('formRecord');

    Route::get('/formAssists','assistEmployee')->name('formAssists');
});
