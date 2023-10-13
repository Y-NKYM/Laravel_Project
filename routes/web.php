<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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


Route::get('/book', [BookController::class, 'index'])->name('book.index')->middleware('auth');
Route::post('/book', [BookController::class, 'create'])->name('book.create')->middleware('auth');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show')->middleware('auth');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit')->middleware('auth');
Route::patch('/book/{id}', [BookController::class, 'update'])->name('book.update')->middleware('auth');
Route::delete('/book/{id}', [BookController::class, 'destroy'])->name('book.destroy')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
