<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('testi1', function () {
    return view('welcome');
});


Route::get('testi', function () {
    return view('components.app');
});

Route::get('Dashboard.index/{id}', [DashboardController::class, 'index']);
