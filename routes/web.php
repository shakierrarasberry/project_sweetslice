<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Rute yang mengarahkan ke metode index() di HomeController
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/prosesregister', [AuthController::class, 'prosesregister']);

Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::get('/home', function(){
    return view('home');
});

// Route::get('/homee',[AuthController::class,'Controller']);
