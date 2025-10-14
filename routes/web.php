<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\Account;
use App\Models\Employee;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');