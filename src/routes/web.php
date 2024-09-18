<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellController;


Route::get('/', [ItemsController::class, 'index']);
Route::get('/mypage', [ProfileController::class, 'mypage']);
Route::get('/mypage/profile', [ProfileController::class, 'profile']);
Route::patch('/mypage/profile', [ProfileController::class, 'edit']);
Route::get('/sell', [SellController::class, 'sell']);
