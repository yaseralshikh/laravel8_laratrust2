<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',                         [FrontendController::class, 'index'])->name('index');
Route::get('/profile',                  [FrontendController::class, 'profile'])->name('profile');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['middleware' => ['role:super_admin|admin']], function () {

        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            // admin backend route
            Route::get('/',           [AdminController::class, 'index'])->name('index');
            Route::get('/maps',       [AdminController::class, 'maps'])->name('maps');
            Route::get('/settings',   [AdminController::class, 'settings'])->name('settings');
            Route::get('/tables',     [AdminController::class, 'tables'])->name('tables');

            // admin users backend route
            Route::resource('/user', UserController::class);
        });
    });
});


// require __DIR__.'/auth.php';
