<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*--------------------------------------------------------------------------------
Rutas de admin
--------------------------------------------------------------------------------*/

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin/cursos', [\App\Http\Controllers\AdminController::class, 'createCourse']);
Route::post('/admin/cursos', [\App\Http\Controllers\AdminController::class, 'storeCourse']);
Route::delete('/admin/cursos/{id}', [\App\Http\Controllers\AdminController::class, 'deleteCourse']);
Route::get('/admin/cursos/edit/{id}', [\App\Http\Controllers\AdminController::class, 'editCourse']);
Route::put('/admin/cursos/update/{id}', [\App\Http\Controllers\AdminController::class, 'updateCourse']);
