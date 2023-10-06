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
    return view('Login');
});


// Route::view('/','/layouts/App')->name('app');

Route::view('/register','Register')->name('register');

Route::view('/login','Login')->name('login');

Route::view('/formEstudiantes','FormEstudiantes')->name('formEstudiantes');

Route::view('/formEmployee','FormEmployee')->name('formEmployee');

Route::view('/formAcademico','FormAcademico')->name('formAcademico');