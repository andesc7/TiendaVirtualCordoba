<?php

use App\Http\Controllers\HeladeriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HeladeriaController::class, 'inicio']);
Route::get('/productos', [HeladeriaController::class, 'productos']);
