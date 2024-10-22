<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
 use Illuminate\Support\Facades\Auth;
 use App\Http\Middleware\AdminMiddleware;
 use App\Http\Controllers\AdminController;



// Rute yang mengarahkan ke metode index() di HomeController
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/prosesregister', [AuthController::class, 'prosesregister']);

Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::get('/home', function(){
    return view('home');
});
Route::get('/location', function(){
    return view('location');
});
Route::get('/admin', function(){
    return view('admin');
});

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});



// Route::get('/homee',[AuthController::class,'Controller']);
