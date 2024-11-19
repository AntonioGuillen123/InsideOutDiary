<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JournalController;

Route::get('/journal', [JournalController::class.'index'])->name('apihome');
Route::delete('/journal/{id}',[JournalController::class,'destroy'])->name('apidestroy');
Route::post('/journal',[JournalController::class,'store'])->name('apistore');
Route::put('/journal/{id}',[JournalController::class,'update'])->name('apiupdate');
