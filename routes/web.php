<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

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

Route::get('/carro', [CarroController::class, "index"]);

Route::POST('/carro', [CarroController::class, "salvar"]);

Route::get('/carro/excluir/{id}', [CarroController::class, "excluir"]);

Route::get("/carro/editar/{id}", [CarroController::class, "editar"]);