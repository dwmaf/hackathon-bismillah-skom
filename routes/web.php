<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/registeruser', [AuthController::class, 'register']);
Route::post('/loginuser', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/recycle', function () {
    return view('recycle');
});
Route::get('/Trecycle', function () {
    return view('TabelRecycle');
});