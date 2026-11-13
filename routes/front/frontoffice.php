<?php

use App\Http\Controllers\Front\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ManagerController::class, 'Welcome'])->name('welcome');
Route::get('/nous-connaitre', [ManagerController::class, 'NousConnaitre'])->name('nous-connaitre');
Route::get('/expertise', [ManagerController::class, 'Expertise'])->name('expertises');
Route::get('/transactions', [ManagerController::class, 'TransactionAll'])->name('transactions');
Route::get('/actualities', [ManagerController::class, 'ActulatiesAll'])->name('actualities');
Route::get('/contact', [ManagerController::class, 'Contact'])->name('contact');