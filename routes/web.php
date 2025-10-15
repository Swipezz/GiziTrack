<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AccountController;

use App\Models\Account;
use App\Models\Employee;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.check'])->group(function () {
    Route::get('/beranda', [SchoolController::class, 'showBeranda'])->name('beranda');

    Route::get('/sekolah', [SchoolController::class, 'showSekolah'])->name('sekolah');
    Route::get('/sekolah/{id}', [SchoolController::class, 'showDetailSekolah'])->name('detailSekolah');

    Route::get('/profil', [AuthController::class, 'showProfil'])->name('profil');
    
    Route::get('/survey/makanan', [AuthController::class, 'showSurveyMakanan'])->name('surveyMakanan');
    Route::post('/survey/makanan', [AuthController::class, 'surveyMakanan'])->name('surveyMakanan.post');

    Route::get('/survey/alergi', [AuthController::class, 'showSurveyAlergi'])->name('surveyAlergi');
    Route::post('/survey/alergi', [AuthController::class, 'surveyAlergi'])->name('surveyAlergi.post');
});
