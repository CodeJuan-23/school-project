<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\AlumnosController;

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

Route::get("/v1/alumnos",[AlumnosController::class,"getAll"]);
Route::get("/v1/alumnos/{id}", [AlumnosController::class, "getItem"]);
Route::post("/v1/alumnos",[AlumnosController::class,"store"]);