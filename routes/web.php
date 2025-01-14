<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(StudentController::class)->group(function (){
    Route::get('/users','index',)->name('users');
    Route::get('/form','create')->name('form');
    Route::get('/store','store')->name('store');
    Route::get('/delete/{id}','delete')->name('delete');
});