<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Auth::routes();

//Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/dashboard', action: [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/studentcreation', action: [App\Http\Controllers\StudentController::class, 'studentCreate'])->name('studentcreation');


Route::controller(StudentController::class)->group(function (){
    Route::get('/users','index',)->name('users');
    Route::get('/form','create')->name('form');
    Route::post('/store','store')->name('store');
    Route::get('/delete/{id}','delete')->name('delete');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update','store')->name('update');
});