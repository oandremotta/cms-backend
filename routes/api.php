<?php

use App\Http\Controllers\AppDadosCriancaController;
use App\Http\Controllers\FuncionalidadeController;
use App\Http\Controllers\TenantController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/modulos', [FuncionalidadeController::class, 'listarFuncionalidades']);
Route::get('/funcionalidades', [FuncionalidadeController::class, 'listarFuncionalidades']);
Route::get('/tenants', [TenantController::class, 'index']);
Route::get('/tenants/{tenant}', [TenantController::class, 'show']);


##APP
Route::get('/app/dados-da-crianca/{tenant}', [AppDadosCriancaController::class, 'show']);

