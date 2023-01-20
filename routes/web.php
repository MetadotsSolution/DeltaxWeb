<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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
    // Route::get('registerIndividual', [RegisterController::class, 'registerIndividual'])->name('registerIndividual');
    // Route::post('registerIndividual', [RegisterController::class, 'store'])->name('registerInd');

    // Route::get('registerCorperation', [RegisterController::class, 'registerCorperation'])->name('registerCorperation');
    // Route::post('registerCorperation', [RegisterController::class, 'store'])->name('registerCop');

    Route::get('login', [RegisterController::class, 'loginIndividual'])->name('login');
    Route::post('login', [RegisterController::class, 'loginUser'])->name('loginUser');

    Route::get('loginCorperation', [RegisterController::class, 'loginCorperation'])->name('loginCorperation');
});

Route::middleware('auth')->group(function () {
    Route::get('home', [DashboardController::class, 'home'])->name('home');
});

