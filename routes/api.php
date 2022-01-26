<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\YearController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources([
    'brands' => BrandController::class,
    'types' => TypeController::class,
    'years' => YearController::class
]);
