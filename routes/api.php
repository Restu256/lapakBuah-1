<?php

use App\Http\Controllers\API\LocationController;
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


Route::get('provinces', [LocationController::class, 'provinces'])->name('api-provinces');
Route::get('regencies/{provinces_id}', [LocationController::class, 'regencies'])->name('api-regencies');
Route::get('districes/{regencies_id}', [LocationController::class, 'districes'])->name('api-districes');
Route::get('villages/{districes_id}', [LocationController::class, 'villages'])->name('api-villages');



// Route::get('register/check', 'Auth\RegisterController@check')->name('api-register-check');

// Route::get('provinces', 'API\LocationController@provinces')->name('api-provinces');
// Route::get('regencies/{provinces_id}', 'API\LocationController@regencies')->name('api-regencies');
