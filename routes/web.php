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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/123', [App\Http\Controllers\HomeController::class, 'teste'])->name('home.cards');
Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about_business'])->name('home.about_business');
Route::get('/app', [App\Http\Controllers\AddController::class, 'index'])->name('add.add');



// admin
// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'building'])->name('building');
