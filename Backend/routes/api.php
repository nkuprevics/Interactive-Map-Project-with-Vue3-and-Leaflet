<?php

use App\Http\Controllers\Api\CoordinatesController;
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

Route::get('/displayMarkers', [CoordinatesController::class, 'displayMarkers']);

Route::post('/store', [CoordinatesController::class, 'store']);

Route::delete('/delete/{id}', [CoordinatesController::class, 'destroy']);
