<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JournalController::class, 'index'])->name('home');
Route::get('/journal{id}', [JournalController::class, 'show'])->name('showDetail');