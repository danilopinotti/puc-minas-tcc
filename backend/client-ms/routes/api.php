<?php

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

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'client-ms',
    ]);
});

Route::get(
    '/packages',
    [\App\Http\Controllers\PackagesController::class, 'index']
);

Route::get(
    '/packages/{package_code}/track',
    [\App\Http\Controllers\PackagesController::class, 'track']
);

Route::post(
    '/freight/calculate',
    [\App\Http\Controllers\FreightController::class, 'calculate']
);
