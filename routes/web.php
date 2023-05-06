<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\PanelMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(PanelMiddleware::class)->prefix('/panel')->group( function () {

    Route::group(['prefix' => '/dashboard'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('panel.dashboard.index');
    });

    Route::group(['prefix' => '/user'], function () {
        Route::get('/list', [UserController::class, 'list'])->name('panel.user.list');
        Route::post('/insert', [UserController::class, 'insert'])->name('panel.user.insert');
        Route::post('/status/{id}', [UserController::class, 'status'])->name('panel.user.status');
        Route::get('/password/{id}', [UserController::class, 'password'])->name('panel.user.password');
    });

    Route::group(['prefix' => '/password'], function () {
        Route::get('/', [PasswordController::class, 'index'])->name('panel.password.index');
        Route::post('/update', [PasswordController::class, 'update'])->name('panel.password.update');
    });
});

