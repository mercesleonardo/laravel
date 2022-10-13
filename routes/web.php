<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/include', [SiteController::class, 'index2']);
Route::get('/', [SiteController::class, 'index']);
Route::get('/exercicio/{qnt}', [SiteController::class, 'exercicio2']);
Route::get('/comentarios', [SiteController::class, 'comentarios']);
Route::get('/components', [SiteController::class, 'components']);

Route::get('/layout', [SiteController::class, 'layout']);
Route::get('/layout2', [SiteController::class, 'layout2']);

