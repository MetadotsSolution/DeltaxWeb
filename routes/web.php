<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAccountController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index']);



Route::middleware(['guest'])->group(function () {
    Route::get('login', [AdminAccountController::class, 'login'])->name('login');
    Route::post('login', [AdminAccountController::class, 'loginAdmin'])->name('loginAdmin');
    
    Route::get('table', [FrontController::class, 'table']);
});





Route::middleware('auth')->group(function () {
    Route::get('home', [DashboardController::class, 'home'])->name('home');
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
});