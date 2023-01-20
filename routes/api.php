<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Validator;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\CorperateAccountController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('registerIndividual', [AuthController::class, 'createInd'])->name('registerInd');
Route::post('registerCorperation', [AuthController::class, 'createCorp'])->name('registerCop');

Route::post("loginInd", [AuthController::class, 'loginInd']);
Route::post("loginCorp", [AuthController::class, 'loginCorp']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
  