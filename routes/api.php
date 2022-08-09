<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalzadoController;
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
Route::get('/calzados', [CalzadoController::class,'index']); //muestra todos los registros
Route::post('/calzados', [CalzadoController::class,'store']); // crea un registro
Route::put('/calzados/{id}', [CalzadoController::class,'update']); // actualiza un registro
Route::delete('/calzados/{id}', [CalzadoController::class,'destroy']); //elimina un registro
