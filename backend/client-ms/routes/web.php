<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    \App\Jobs\UserTrackedObject::dispatch(123);

    return response()->json([
        'status' => 'ok',
        'service' => 'client-ms',
    ]);
});

Route::get('object-track/{object_id}', function ($objectId) {
    \App\Jobs\UserTrackedObject::dispatch($objectId);

    return response()->json([
        'status' => 'ok',
        'service' => 'client-ms',
    ]);
});
