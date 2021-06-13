<?php

use Controllers\HomePageController;
use Controllers\PlayerController;
use Facades\Route;

//Route::get('/', [HomePageController::class, 'home']);
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{id}', [PlayerController::class, 'show']);
Route::get('/players/create', [PlayerController::class, 'create']);
//Route::post('/players/create', [PlayerController::class, 'insert']);
Route::get('/players/{id}/delete', [PlayerController::class, 'delete']);
//Route::get('/players/{id}/edit', [PlayerController::class, 'edit']);
//Route::post('/players/{id}/edit', [PlayerController::class, 'update']);

