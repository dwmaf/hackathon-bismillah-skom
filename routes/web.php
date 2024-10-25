<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecycleController;
use App\Http\Controllers\MapController;
use App\Models\Merk;

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
    // $merks = Merk::all();
    return view('TabelRecycle');
});
Route::get('/recycle/{jenis}', function ($jenis) {
    // Fetch all merks where jenis matches the parameter
    $merks = Merk::where('jenis', $jenis)->get();
    return view('recycle', ['merks' => $merks]);
});
// Route::get('/Trecycle', function () {
//     return view('TabelRecycle');
// });
Route::post('/submitrecycle', [RecycleController::class, 'submit']);
Route::get('/hasil', function () {
    return view('hasil');
});
Route::get('/maps', [MapController::class, 'index']);
Route::get('/history', [RecycleController::class, 'history']);