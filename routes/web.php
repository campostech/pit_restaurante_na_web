<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SystemController;

Route::get('/entrar',  [UserController::class, 'login'])->name('user.login');
Route::post('/entrar',  [UserController::class, 'signin'])->name('user.signin');
Route::get('/registro',  [UserController::class, 'create'])->name('user.create');
Route::post('/registro',  [UserController::class, 'store'])->name('user.store');
Route::get('/sair',  [UserController::class, 'logout'])->name('user.logout');

Route::get('/',  [SystemController::class, 'create'])->name('system');


