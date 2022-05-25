<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\depot_projet;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\inscription_redacteur;

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


Route::get('/', [ProjetController::class, 'show']);

Route::get('/projet', [depot_projet::class, 'index']);
Route::post('/projet/result', [depot_projet::class, 'show']);

Route::get('/inscription', [inscription_redacteur::class, 'index']);
Route::post('/inscription/result', [inscription_redacteur::class, 'show']);


Route::get('/projet/liste', [ProjetController::class, 'show2']);
