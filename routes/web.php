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
Route::middleware(['auth'])->group(function () {


Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin/cursos', [\App\Http\Controllers\AdminController::class, 'createCourse']);
Route::post('/admin/cursos', [\App\Http\Controllers\AdminController::class, 'storeCourse']);
Route::delete('/admin/cursos/{id}', [\App\Http\Controllers\AdminController::class, 'deleteCourse']);
Route::get('/admin/cursos/edit/{id}', [\App\Http\Controllers\AdminController::class, 'editCourse']);
Route::put('/admin/cursos/update/{id}', [\App\Http\Controllers\AdminController::class, 'updateCourse']);
Route::get('/admin/pricing', [\App\Http\Controllers\AdminController::class, 'createPricingCard'] );
Route::post('/admin/pricing', [\App\Http\Controllers\AdminController::class, 'storePricingCard'] );
Route::get('/admin/registration', [\App\Http\Controllers\RegistrationController::class, 'index'] );
Route::get('/admin/contacto', [\App\Http\Controllers\ContactController::class, 'index'] );
///------------------------------------------------------------
//                  RUTAS AJAX
///------------------------------------------------------------

Route::get('/v1/cursos/{lang}', [\App\Http\Controllers\api\CursosApiController::class,  'index']);


Route::get('/v1/pricing/{lang}', [\App\Http\Controllers\api\PricingApiController::class,  'index']);


Route::post('/v1/contact', [\App\Http\Controllers\ContactController::class, 'storeContact']);
Route::delete('/v1/contact/{id}', [\App\Http\Controllers\ContactController::class, 'deleteContact']);

});


