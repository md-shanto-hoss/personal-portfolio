<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShantoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\MessageController;

Route::get('/', [ShantoController::class, 'index'])->name('home');

Route::get('/cv/download', [MessageController::class, 'cvDownload'] )->name('download.cv');
Route::post('/hire/me', [MessageController::class, 'hire'] )->name('hire.me');
Route::post('/review', [MessageController::class, 'review'] )->name('review');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');

    Route::get('/personal/add', [PersonalController::class, 'index'] )->name('personal.add');
    Route::post('/personal/create', [PersonalController::class, 'create'] )->name('personal.create');
    Route::get('/personal/manage', [PersonalController::class, 'manage'] )->name('personal.manage');
    Route::get('/personal/edit/{id}', [PersonalController::class, 'edit'] )->name('personal.edit');
    Route::post('/personal/update/{id}', [PersonalController::class, 'update'] )->name('personal.update');
    Route::get('/personal/delete/{id}', [PersonalController::class, 'delete'] )->name('personal.delete');

    Route::get('/service/add', [ServiceController::class, 'index'] )->name('service.add');
    Route::post('/service/create', [ServiceController::class, 'create'] )->name('service.create');
    Route::get('/service/manage', [ServiceController::class, 'manage'] )->name('service.manage');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'] )->name('service.edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'update'] )->name('service.update');
    Route::get('/service/delete/{id}', [ServiceController::class, 'delete'] )->name('service.delete');

    Route::get('/education/add', [EducationController::class, 'index'] )->name('education.add');
    Route::post('/education/create', [EducationController::class, 'create'] )->name('education.create');
    Route::get('/education/manage', [EducationController::class, 'manage'] )->name('education.manage');
    Route::get('/education/edit/{id}', [EducationController::class, 'edit'] )->name('education.edit');
    Route::post('/education/update/{id}', [EducationController::class, 'update'] )->name('education.update');
    Route::get('/education/delete/{id}', [EducationController::class, 'delete'] )->name('education.delete');

    Route::get('/experience/add', [ExperienceController::class, 'index'] )->name('experience.add');
    Route::post('/experience/create', [ExperienceController::class, 'create'] )->name('experience.create');
    Route::get('/experience/manage', [ExperienceController::class, 'manage'] )->name('experience.manage');
    Route::get('/experience/edit/{id}', [ExperienceController::class, 'edit'] )->name('experience.edit');
    Route::post('/experience/update/{id}', [ExperienceController::class, 'update'] )->name('experience.update');
    Route::get('/experience/delete/{id}', [ExperienceController::class, 'delete'] )->name('experience.delete');

    Route::get('/work/add', [WorkController::class, 'index'] )->name('work.add');
    Route::post('/work/create', [WorkController::class, 'create'] )->name('work.create');
    Route::get('/work/manage', [WorkController::class, 'manage'] )->name('work.manage');
    Route::get('/work/detail/{id}', [WorkController::class, 'detail'] )->name('work.detail');
    Route::get('/work/edit/{id}', [WorkController::class, 'edit'] )->name('work.edit');
    Route::post('/work/update/{id}', [WorkController::class, 'update'] )->name('work.update');
    Route::get('/work/delete/{id}', [WorkController::class, 'delete'] )->name('work.delete');

});
