<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('inicio');
});

Route::resource('productos', ProductoController::class);