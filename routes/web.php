<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ProfileController;

use App\Models\Account;
use App\Models\Employee;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::middleware(['auth.check'])->group(function () {
    Route::get('/beranda', [SchoolController::class, 'showBeranda'])->name('beranda');

    Route::get('/sekolah', [SchoolController::class, 'showSekolah'])->name('sekolah');
    Route::get('/sekolah/{id}', [SchoolController::class, 'showDetailSekolah'])->name('detailSekolah');

    Route::get('/profil', [ProfileController::class, 'showProfil'])->name('profil');

    Route::get('/survey/makanan', [SurveyController::class, 'showSurveyMakanan'])->name('survey_makanan');
    Route::post('/survey/makanan', [SurveyController::class, 'surveyMakanan'])->name('survey_makanan.post');

    Route::get('/survey/alergi', [SurveyController::class, 'showSurveyAlergi'])->name('survey_alergi');
    Route::post('/survey/alergi', [SurveyController::class, 'surveyAlergi'])->name('survey_alergi.post');
});
