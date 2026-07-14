<?php

use Illuminate\Support\Facades\Route;

// Página Home - visitantes
Route::get('/', function () {
    return view('home');
})->name('home');

// Login - visitantes
Route::get('/login', function () {
    return view('login');
})->name('login');

// Dashboard - utilizadores autenticados
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
