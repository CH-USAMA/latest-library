<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', action: [StudentController::class, 'index'])->name('users');
Route::get('/student_form', action: [StudentController::class, 'create'])->name('student_form');
Route::post('/store_student', action: [StudentController::class, 'store'])->name('store_student');
Route::get('/deleteUser/{id}',[StudentController::class, 'Delete'])->name('deleteUser');

