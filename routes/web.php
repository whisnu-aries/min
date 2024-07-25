<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/clients/{client:uuid}', [ClientController::class, 'detail'])->name('clients.detail');


Route::prefix('admin')->group(function () {
    Route::view('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
   
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::prefix('service')->group(function () {
            Route::get('/', [ServiceController::class, 'index'])->name('service.index');
            Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
            Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
            Route::get('/edit/{service:uuid}', [ServiceController::class, 'edit'])->name('service.edit');
            Route::put('/update/{service:uuid}', [ServiceController::class, 'update'])->name('service.update');
            Route::get('/destroy/{service:uuid}', [ServiceController::class, 'destroy'])->name('service.destroy');
        });

        Route::prefix('client')->group(function () {
            Route::get('/', [ClientController::class, 'index'])->name('client.index');
            Route::get('/create', [ClientController::class, 'create'])->name('client.create');
            Route::post('/store', [ClientController::class, 'store'])->name('client.store');
            Route::get('/edit/{client:uuid}', [ClientController::class, 'edit'])->name('client.edit');
            Route::put('/update/{client:uuid}', [ClientController::class, 'update'])->name('client.update');
            Route::get('/destroy/{client:uuid}', [ClientController::class, 'destroy'])->name('client.destroy');
        });

        Route::prefix('project')->group(function () {
            Route::get('/', [ProjectController::class, 'index'])->name('project.index');
            Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
            Route::post('/store', [ProjectController::class, 'store'])->name('project.store');
            Route::get('/edit/{project:uuid}', [ProjectController::class, 'edit'])->name('project.edit');
            Route::put('/update/{project:uuid}', [ProjectController::class, 'update'])->name('project.update');
            Route::get('/destroy/{project:uuid}', [ProjectController::class, 'destroy'])->name('project.destroy');
            Route::get('/asset/destroy/{uuid}', [ProjectController::class, 'destroy_storage'])->name('asset.destroy');
        });
    });
});

