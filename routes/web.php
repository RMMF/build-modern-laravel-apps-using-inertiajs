<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Dashboard');
});

Route::get('users', [UserController::class, 'index'])
    ->name('users');

Route::get('users/create', [UserController::class, 'create'])
    ->name('users.create');

Route::post('users', [UserController::class, 'store'])
    ->name('users.store');

Route::get('/products', function () {
    return Inertia::render('Products');
});

