<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.Layouts');
});

Route::get('/recycle', function () {
    return view('recycle');
});

Route::get('/Trecycle', function () {
    return view('TabelRecycle');
});