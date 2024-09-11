<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/', [ItemsController::class, 'index']);
Route::get('/mypage', [ProfileController::class, 'mypage']);
Route::patch('/mypage/profile', [ProfileController::class, 'update']);
