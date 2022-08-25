<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SystemController;
use App\Http\Middleware\ClientMiddleware;

Route::get('/entrar',  [UserController::class, 'login'])->name('user.login');
Route::post('/entrar',  [UserController::class, 'signin'])->name('user.signin');
Route::get('/registro',  [UserController::class, 'create'])->name('user.create');
Route::post('/registro',  [UserController::class, 'store'])->name('user.store');
Route::get('/sair',  [UserController::class, 'logout'])->name('user.logout');

Route::group(['middleware' => ClientMiddleware::class], function(){
    Route::get('/',  [SystemController::class, 'create'])->name('system');
    Route::post('/gerar',  [SystemController::class, 'generate'])->name('system.generate');
    Route::post('/preview',  [SystemController::class, 'convertTemplate'])->name('system.preview');
});

Route::get('/exemplo',  [SystemController::class, 'example'])->name('system.example');

