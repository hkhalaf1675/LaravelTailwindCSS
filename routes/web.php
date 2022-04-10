<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

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
    return view('layouts.main');
});

Route::get('/home',[PostController::class,'home'])->name('home');
Route::get('/subject/{sub_id}',[PostController::class,'subject']);
Route::get('/lesson/{lesson_id}',[PostController::class,'lesson']);

Route::get('/login',[PostController::class,'login'])->name('login');

Route::get('/admin',[AdminController::class,'showadmin'])->name('admin');

Route::post('/addsubject',[AdminController::class,'AddSubject'])->name('addsubject');
Route::post('/deletesubject',[AdminController::class,'DeleteSubject'])->name('deletesubject');

Route::post('/addlesson',[AdminController::class,'AddLesson'])->name('addlesson');
Route::post('/deletelesson',[AdminController::class,'DeleteLesson'])->name('deletelesson');