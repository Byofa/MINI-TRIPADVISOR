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

Route::get('register', [App\Http\Controllers\UsersController::class, 'indexRegister'])->name('register')->middleware('notconnected');

Route::get('login', [App\Http\Controllers\UsersController::class, 'indexLogin'])->name('login')->middleware('notconnected');

Route::get('logout', [App\Http\Controllers\UsersController::class, 'logout'])->name('logout')->middleware('connected');

Route::get('home', [App\Http\Controllers\PlaceController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PlaceController::class, 'index'])->name('home');

Route::get('list', [App\Http\Controllers\PlaceController::class, 'list'])->name('list');

Route::get('place/{id}', [App\Http\Controllers\PlaceController::class, 'place'])->name('place');

Route::get('newPlace', [App\Http\Controllers\PlaceController::class, 'indexPlace'])->name('newPlace')->middleware('connected');

Route::post('createPlace', [App\Http\Controllers\PlaceController::class, 'createPlace'])->name('createPlace')->middleware('connected');

Route::post('createUser', [App\Http\Controllers\UsersController::class, 'createUser'])->name('createUser')->middleware('notconnected');

Route::post('auth', [App\Http\Controllers\UsersController::class, 'auth'])->name('auth')->middleware('notconnected');

Route::post('createGrade', [App\Http\Controllers\GradeController::class, 'createGrade'])->name('createGrade')->middleware('connected');

Route::delete('grade/{id}', [App\Http\Controllers\GradeController::class, 'delete_grade'])->name('delete_grade')->middleware('connected');

Route::delete('deletePlace/{id}', [App\Http\Controllers\PlaceController::class, 'delete_place'])->name('delete_place')->middleware('connected');