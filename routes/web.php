<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Auth::routes();

//Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/dashboard', action: [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::controller(StudentController::class)->group(function (){
    Route::get('/studentslist','index',)->name('users');
    Route::get('/studentregister','studentCreate')->name('form');
    Route::get('/teacherregister','teacherCreate')->name('tform');
    Route::get('/teacherslist','teacherindex',)->name('teacherusers');
    Route::get('/profile/{id}','profile',)->name('profile');

    Route::post('/store','store')->name('store');
    Route::post('/tstore','teacherstore')->name('tstore');
    Route::get('/delete/{id}','delete')->name('delete');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update','update')->name( 'update');
});

Route::controller(NoteController::class)->group(function (){
    Route::get('/noteslist','index',)->name('notes');
    Route::get('/createnote','notecreate')->name('nform');
    Route::post('/notestore','notestore')->name('notestore');
    Route::get('/deletenote/{id}','deletenote')->name('deletenote');
    Route::get('/editnote/{id}','editnote')->name('editnote');
    Route::post('/updatenote','updatenote')->name('updatenote');
});