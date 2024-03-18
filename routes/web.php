<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('livewire.home.home');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/user-login', function () {
    return view('livewire.authen.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
