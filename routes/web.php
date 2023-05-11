<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class,'homepage']);
Route::get('/classics', [HomeController::class,'classics']);
Route::get('/adventure', [HomeController::class,'adventure']);
Route::get('/computer', [HomeController::class,'computer']);
Route::get('/mystery', [HomeController::class,'mystery']);
Route::get('/horror', [HomeController::class,'horror']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/help', [HomeController::class,'help']);
Route::get('/clarification', [HomeController::class,'clarification']);

