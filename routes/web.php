<?php

use App\Http\Controllers\CursoController;
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

Route::get('/',[HomeController::class, 'home']);

Route::get('/cursos',[CursoController::class, 'index']);
Route::get('/cursos/create',[CursoController::class, 'create']);
Route::get('/cursos/{curso}',[CursoController::class, 'show']);

