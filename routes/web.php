<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;

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

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('admin.auth');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    
    Route::get('/', [HomeController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin.auth');
});

Route::get('/book', [BookController::class, 'index'])->name('book.index')->middleware('auth');
Route::post('/book', [BookController::class, 'create'])->name('book.create')->middleware('auth');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show')->middleware('auth');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit')->middleware('auth');
Route::patch('/book/{id}', [BookController::class, 'update'])->name('book.update')->middleware('auth');
Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book.destroy')->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show')->middleware('auth');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::patch('/user/{id}', [UserController::class, 'update'])->name('user.update')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
