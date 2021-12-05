<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\AssinantesController;
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

Route::get('/', function () {
    return view('welcome');
});

//Rotas sistema abaixo
Route::resource('Clientes', ClientesController::class);
Route::resource('Assinantes', AssinantesController::class);
