<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [journalController::class, 'index'])->name('home');