<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChampionshipController;
use App\Http\Controllers\TeamController;

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

// Liste de tous les championnats
Route::get('/championnats', [ChampionshipController::class, 'browse']);

// Liste d'un championnat
Route::get('/championnat/{id}', [ChampionshipController::class, 'read']);


// Liste de toutes les equipes
Route::get('equipes', [TeamController::class, 'browse']);

// Liste d'une équipe
Route::get('equipe/{id}', [TeamController::class, 'read']);

// Liste de tous les joueurs

// Liste d'un joueur