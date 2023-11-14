<?php

use App\Http\Controllers\ControlEmployee;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControlUser;
use App\Http\Livewire\Employee\Create;
use App\Http\Livewire\Employee\Record;
use App\Http\Livewire\Employee\RecordEmployee;
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


Route::get('/',function(){
    return view('Login');
});

Route::controller(ControlUser::class)->group(function(){
    Route::get('/login','Login')->name('login');
});


Route::controller(ControlEmployee::class)->group(function(){

    Route::get('/admin','admin')->name('formAdmin');

    Route::get('/Register','register')->name('registerEmployee');

    Route::get('/Records','record')->name('records');

    Route::get('/Assists','assistEmployee')->name('formAssists');

    Route::post('/Save','store')->name('Employee.store');

    Route::get('/EditEmployee/{id}', 'edit')->name('Employee.edit');
    
    Route::put('/UpdateEmployee/{id}', 'update')->name('Employee.update');

    Route::delete('/DeleteEmployee/{id}', 'destroy')->name('Employee.delete');
    
});

Route::controller(Create::class)->group(function(){
    Route::get('/asus','render')->name('render');
    Route::post('/Save','save')->name('save');

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
