<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ServiceStatus;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/status', ServiceStatus::class)->name('status');
