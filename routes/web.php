<?php

use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function(){
    Route::resource('dashboard', DashboardController::class); 
    Route::get('/logout', [DashboardController::class, 'signout']);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('routes', RouteController::class);

    Route::resource('supplier', SupplierController::class);

});
