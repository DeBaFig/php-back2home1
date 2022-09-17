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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about_business'])->name('home.about_business');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'building'])->name('building');
