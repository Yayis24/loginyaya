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

Route::middleware(['lang'])->group(function(){


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//Ruta Traduccion

Route::get('lang/{lang}', function($lang){
    session(['lang'=>$lang]);
    return Redirect::back();
})->where(['lang'=>'es|en']);

//Rutas de inicio

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/prueba', [App\Http\Controllers\HomeController::class, 'prueba'])->middleware('can:admin.prueba')->name('prueba');

Route::get('/nuevaprueba', [App\Http\Controllers\HomeController::class, 'nuevaprueba'])->middleware('can:admin.nuevaprueba')->name('nuevaprueba');

Route::get('/calculator', [App\Http\Controllers\Calculatorcontroller::class, 'index'])->name('calculator');

Route::post('/resultado', [App\Http\Controllers\Calculatorcontroller::class, 'resultado'])->name('resultado');

Route::get('/apprentices', [App\Http\Controllers\Apprenticecontroller::class, 'index'])->middleware('can:admin.apprentices')->name('apprentices');

//Rutas CRUD Aprendices:
Route::get('/apprentices/add', [App\Http\Controllers\Apprenticecontroller::class, 'getapprendiceadd'])->name('apprentices.add');
Route::post('/apprentices/add', [App\Http\Controllers\Apprenticecontroller::class, 'postapprendiceadd'])->name('apprentices.add');
Route::get('/apprentices/edit/{id}', [App\Http\Controllers\Apprenticecontroller::class, 'getapprendicedit'])->name('apprentices.edit');
Route::post('/apprentices/edit/{id}', [App\Http\Controllers\Apprenticecontroller::class, 'postapprendicedit'])->name('apprentices.edit');
Route::get('/apprentices/delete/{id}', [App\Http\Controllers\Apprenticecontroller::class, 'getapprendicedelete'])->name('apprentices.delete');
});