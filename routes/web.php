<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeapYearController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LeapYearController::class, 'index']);
Route::post('/calculate', [LeapYearController::class, 'calculate']);
