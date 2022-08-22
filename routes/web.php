<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SystemController;

Route::get('/entrar',  [UserController::class, 'create'])->name('user.login');
Route::get('/registro',  [UserController::class, 'create'])->name('user.create');
Route::post('/registro',  [UserController::class, 'store'])->name('user.store');

Route::get('/',  [SystemController::class, 'create'])->name('system');


