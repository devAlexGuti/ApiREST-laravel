<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmpleadoController;
use App\Http\Controllers\API\AutenticarController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Primera forma API REST
/* Route::get('empleados', [EmpleadoController::class, 'index']);
Route::post('empleados', [EmpleadoController::class, 'store']);
Route::get('empleados/{empleado}', [EmpleadoController::class, 'show']);
Route::put('empleados/{empleado}', [EmpleadoController::class, 'update']);
Route::delete('empleados/{empleado}', [EmpleadoController::class, 'destroy']); */

Route::post('registro', [AutenticarController::class, 'registro']);
Route::post('acceso', [AutenticarController::class, 'acceso']);
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('cerrarsesion', [AutenticarController::class, 'cerrarSesion']);
    Route::apiResource('empleados',EmpleadoController::class);
});
