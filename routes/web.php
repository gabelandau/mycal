<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'renderWelcome'])->name('welcome');

    Route::get('auth/facebook', [LoginController::class, 'redirectToProvider'])->name('login');
    Route::get('auth/redirect', [LoginController::class, 'handleProviderCallback'])->name('auth-redirect');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'renderHome'])->name('home');

    Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
});
