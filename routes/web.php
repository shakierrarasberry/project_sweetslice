<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
 use Illuminate\Support\Facades\Auth;
 use App\Http\Middleware\AdminMiddleware;
 use App\Http\Controllers\AdminController;
 use App\Http\Controllers\PostController;
 use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;



// Rute yang mengarahkan ke metode index() di HomeController

Route::get('/auth', [AuthController::class, 'authh']);
Route::post('/prosesregister', [AuthController::class, 'prosesregister']);
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', function(){
    return view('home');
});
Route::get('/location', function(){
    return view('location');
});
Route::get('/admin', function(){
    return view('admin');
});
Route::get('/account', function(){
    return view('account');
});
Route::get('/aboutus', function(){
    return view('aboutus');
});


Route::get('/admin/users', [UserController::class, 'tampil'])->name('users.tampil');



Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/product', [ProductController::class, "tampilkanData"]); //buat nampilin
    Route::post('/admin/product', [ProductController::class, "store"]); //buat ngepost
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');   
    Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/products/update/{id}', [ProductController::class, 'update']);

    Route::get('/home', [ProductController::class, 'showProducts']);


});
