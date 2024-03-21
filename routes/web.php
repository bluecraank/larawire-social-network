<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome;
use App\Livewire\Login;
use App\Livewire\Register;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
