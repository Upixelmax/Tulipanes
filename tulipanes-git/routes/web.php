<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\CategoriaController;



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
    return view('auth/login');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'show']);

Route::get('/logout', [LogoutController::class, 'logout']);


Route::get('/categoria', [CategoriaController::class, 'show']);
Route::get('/categoria/borrar/{ID_CATEGORIA}', [CategoriaController::class, 'borrar']);
Route::get('/categoria/seleccionar/{ID_CATEGORIA}', [CategoriaController::class, 'seleccionar']);      
                                  
Route::post('/categoria', [CategoriaController::class, 'categoria']);
Route::post('/categoria/editar', [CategoriaController::class, 'editar']);


Route::get('/departamento', [DepartamentoController::class, 'show']);
Route::get('/departamento/borrar/{ID_DEPARTAMENTO}', [DepartamentoController::class, 'borrar']);
Route::get('/departamento/seleccionar/{ID_DEPARTAMENTO}', [DepartamentoController::class, 'seleccionar']); 

Route::post('/departamento', [DepartamentoController::class, 'departamento']);
Route::post('/departamento/editar', [DepartamentoController::class, 'editar']);
