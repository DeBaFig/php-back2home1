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
Route::get('/sobreb2h1', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('/sobre', [App\Http\Controllers\HomeController::class, 'about_b2h1'])->name('home.aboutb2h1');
Route::get('/contato', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('/alugar', [App\Http\Controllers\HomeController::class, 'rent'])->name('home.rent');
Route::get('/comprar', [App\Http\Controllers\HomeController::class, 'sell'])->name('home.sell');





Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
