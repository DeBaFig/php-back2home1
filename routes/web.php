<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;

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

// Não precisa autenticação 
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/sobreb2h1', [HomeController::class, 'about'])->name('home.about');
Route::get('/sobre', [HomeController::class, 'about_b2h1'])->name('home.aboutb2h1');
Route::get('/contato', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/alugar', [HomeController::class, 'rent'])->name('home.rent');
Route::get('/comprar', [HomeController::class, 'sell'])->name('home.sell');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Precisa autenticar e ser Admin 

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    Route::get('/cadastrar', [PropertyController::class, 'index'])->name('admin.add')->middleware('is_admin');

});