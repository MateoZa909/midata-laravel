<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LastFiveController;
use App\Http\Controllers\LastTenController;
use App\Http\Controllers\TwentyFiveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta de los 5 ultimos registros | basica
Route::get("midata-last-five", LastFiveController::class);

// Ruta de los 10 ultimos registros | basica
Route::get("midata-last-ten", LastTenController::class);

// Ruta de los 25 ultimos registros | basica
Route::get("midata-twenty-five", TwentyFiveController::class);

