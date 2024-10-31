<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index-4');
});

Route::get('{any}', [RouteController::class, 'index'])->where('any', '.*');