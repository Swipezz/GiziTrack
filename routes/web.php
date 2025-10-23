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

Route::middleware(['auth.check'])->group(function () {
    Route::redirect('/', '/beranda');

    Route::get('/admin/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/admin/register', [AuthController::class, 'register'])->name('register.post');

    Route::get('/beranda', [SchoolController::class, 'showBeranda'])->name('beranda');

    Route::get('/sekolah/create', [SchoolController::class, 'create'])->name('createSekolah');

    Route::get('/sekolah', [SchoolController::class, 'showSekolah'])->name('sekolah');
    Route::post('/sekolah', [SchoolController::class, 'store'])->name('storeSekolah');

    Route::get('/sekolah/{id}', [SchoolController::class, 'showDetailSekolah'])->name('detailSekolah');
    Route::post('/sekolah/{id}', [SchoolController::class, 'updateSekolah'])->name('updateSekolah');

    Route::get('/profil', [ProfileController::class, 'showProfil'])->name('profil');

    Route::get('/survey/makanan', [SurveyController::class, 'showSurveyMakanan'])->name('surveyMakanan');
    Route::post('/survey/makanan', [SurveyController::class, 'surveyMakanan'])->name('surveyMakanan.post');

    Route::get('/survey/alergi', [SurveyController::class, 'showSurveyAlergi'])->name('surveyAlergi');
    Route::post('/survey/alergi', [SurveyController::class, 'surveyAlergi'])->name('surveyAlergi.post');
});
