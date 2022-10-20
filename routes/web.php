<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\OwnerController;

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
Route::get('/resultado', [HomeController::class, 'search'])->name('home.result');
Route::get('/sobre', [HomeController::class, 'about'])->name('home.about');
Route::get('/sobreb2h1', [HomeController::class, 'about_b2h1'])->name('home.aboutb2h1');
Route::get('/alugar', [HomeController::class, 'rent'])->name('home.rent');
Route::get('/comprar', [HomeController::class, 'buy'])->name('home.buy');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/simulador', [HomeController::class, 'simulador'])->name('home.simulador');
Route::get('/propriedade/{id}', [HomeController::class, 'show'])->name("home.show");


// Precisa autenticar e ser Admin 

Route::prefix('admin')->group(function(){
    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');

    Route::get('/property/new', [PropertyController::class, 'create'])->name('property.add')->middleware('is_admin');
    Route::get('/property/all', [PropertyController::class, 'table'])->name('property.all')->middleware('is_admin');
    Route::post('/property/new', [PropertyController::class, 'store'])->name('property.store')->middleware('is_admin');
    Route::get('/property/show/{id}', [PropertyController::class, 'show'])->name('property.show')->middleware('is_admin');
    Route::get('/property/form/{id}', [PropertyController::class, 'formEdit'])->name('property.form.edit')->middleware('is_admin');
    Route::post('/property/edit/{id}', [PropertyController::class, 'edit'])->name('property.edit')->middleware('is_admin');
    Route::get('/property/destaques', [PropertyController::class, 'destaque'])->name('property.destaque')->middleware('is_admin');

    Route::get('/owner/new', [OwnerController::class, 'create'])->name('owner.add')->middleware('is_admin');
    Route::get('/owner/all', [OwnerController::class, 'table'])->name('owner.all')->middleware('is_admin');
    Route::post('/owner/new', [OwnerController::class, 'store'])->name('owner.store')->middleware('is_admin');
    Route::get('/owner/show/{id}', [OwnerController::class, 'show'])->name('owner.show')->middleware('is_admin');
    Route::get('/owner/form/{id}', [OwnerController::class, 'formEdit'])->name('owner.form.edit')->middleware('is_admin');
    Route::post('/owner/edit/{id}', [OwnerController::class, 'edit'])->name('owner.edit')->middleware('is_admin');
    Route::post('/owner/delete/{id}', [OwnerController::class, 'destroy'])->name('owner.delete')->middleware('is_admin');
    
});

Route::controller(PhotoController::class)->group(function(){
    Route::get('image-mostra', 'mostra');
    Route::post('image-upload', 'store')->name('image.store');
});