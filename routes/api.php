<?php

use App\Http\Controllers\API\AmigosSecretosController;
use App\Http\Controllers\API\EmpleadoController;
use App\Http\Controllers\API\EndulzadasController;
use App\Http\Controllers\API\GruposController;
use App\Http\Controllers\API\GruposUsuariosController;
use App\Http\Controllers\API\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Empleados
Route::controller(EmpleadoController::class)->group(function(){
    Route::get('/empleados', 'index');
    Route::get('/allInfoEmpleado/{id}', 'getAllInfoEmpleado');
    Route::post('/empleado', 'store');
    Route::get('/empleado/{id}', 'show');
    Route::put('/empleado/{id}', 'update');
    Route::delete('/empleado/{id}', 'destroy');
});

//Grupos
Route::controller(GruposController::class)->group(function(){
    Route::get('/grupos', 'index');
    Route::post('/grupo', 'store');
    Route::get('/grupo/{id}', 'show');
    Route::put('/grupo/{id}', 'update');
    Route::delete('/grupo/{id}', 'destroy');
});

// Grupos usuarios
Route::controller(GruposUsuariosController::class)->group(function(){
    Route::get('/gruposusuarios', 'index');
    Route::post('/gruposusuario', 'store');
    Route::get('/gruposusuario/{id}', 'show');
    Route::put('/gruposusuario/{id}', 'update');
    Route::delete('/gruposusuario/{id}', 'destroy');
});

// Amigos Secretos
Route::controller(AmigosSecretosController::class)->group(function(){
    Route::get('/amigosecretos', 'index');
    Route::post('/amigosecreto', 'store');
    Route::get('/amigosecreto/{id}', 'show');
    Route::put('/amigosecreto/{id}', 'update');
    Route::delete('/amigosecreto/{id}', 'destroy');
});

// login
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index');
    Route::post('/login', 'store');
});

// endulzadas
Route::controller(EndulzadasController::class)->group(function(){
    Route::get('/endulzadas', 'index');
    Route::post('/endulzada', 'store');
});

