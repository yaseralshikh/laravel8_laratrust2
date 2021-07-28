<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/',                 [FrontendController::class, 'index'])->name('index');
Route::get('/profile',          [FrontendController::class, 'profile'])->name('profile');

Route::get('/admin',            [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/maps',       [AdminController::class, 'maps'])->name('admin.maps');
Route::get('/admin/settings',   [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/tables',     [AdminController::class, 'tables'])->name('admin.tables');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
