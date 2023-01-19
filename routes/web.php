<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CorperateAccountController;
use App\Http\Controllers\IndividualAccountController;

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
    Route::get('registerIndividual', [FrontController::class, 'registerIndividual'])->name('registerIndividual');
    Route::post('registerIndividual', [IndividualAccountController::class, 'store'])->name('registerInd');

    Route::get('registerCorperation', [FrontController::class, 'registerCorperation'])->name('registerCorperation');
    Route::post('registerCorperation', [CorperateAccountController::class, 'store'])->name('registerCop');

    Route::get('login', [FrontController::class, 'loginIndividual'])->name('login');
    Route::post('login', [IndividualAccountController::class, 'loginUser'])->name('loginUser');

    Route::get('loginCorperation', [FrontController::class, 'loginCorperation'])->name('loginCorperation');
});

Route::middleware('auth')->group(function () {
    Route::get('home', [DashboardController::class, 'home'])->name('home');
});
