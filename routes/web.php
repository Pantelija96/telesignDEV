<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


Route::get('/', [FrontendController::class, 'showLogin']);
Route::get('/layout', [FrontendController::class, 'showLayout']);
Route::get('/home', [FrontendController::class, 'showHome']);
