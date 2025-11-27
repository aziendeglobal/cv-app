<?php

use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CVController::class, 'index']);

Route::get('/portfolio', [CVController::class, 'portfolio']);
Route::get('/califications', [CVController::class, 'califications']);