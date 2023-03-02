<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Save\SaveController;

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

Route::get('/SaveConsejo', [SaveController::class, 'SaveConsejo']);
Route::post('/SaveConsejo', [SaveController::class, 'SaveConsejo']);

Route::get('/SavePerson', [SaveController::class, 'SavePerson']);
Route::post('/SavePerson', [SaveController::class, 'SavePerson']);

Route::get('/Changed', [SaveController::class, 'Changed']);



#Resultados
Route::get('/Response', [SaveController::class, 'Response'])->name("Response");
#Cerrar Session
Route::get('Closesion', [SaveController::class, 'Closed'])->name("Closesion");