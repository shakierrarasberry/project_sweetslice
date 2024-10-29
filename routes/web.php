<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
 use Illuminate\Support\Facades\Auth;
 use App\Http\Middleware\AdminMiddleware;
 use App\Http\Controllers\AdminController;
 use App\Http\Controllers\PostController;
 use App\Http\Controllers\ProductController;



// Rute yang mengarahkan ke metode index() di HomeController
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/auth', [AuthController::class, 'authh']);


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
    Route::get('/admin/product', [ProductController::class, "index"]);
    Route::post('/admin/product', [ProductController::class, "store"]);
});
