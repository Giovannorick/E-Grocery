<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MaintenanceController;
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

//Index
Route::get('/', function () {
    return view('start');
});

//Localization
Route::get('locale/{locale?}', [Controller::class, 'setLocale']);

// Register
Route::get('/register', [UserController::class, 'registerPage']);
Route::post('/register', [UserController::class, 'register']);

// Login
Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::middleware('allowed')->group(function () {
    // Home
    Route::get('/home', [ItemController::class, 'home']);

    //Profile
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::post('/updateProfile', [ProfileController::class, 'updateProfile']);

    //Carts
    Route::get('/buy/{id}/{price}', [OrderController::class, 'buy']);
    Route::get('/cart', [OrderController::class, 'cart']);
    Route::get('/delete/{id}', [OrderController::class, 'delete']);
    Route::get('/checkout', [OrderController::class, 'checkout']);

    //Details
    Route::get('/detail/{id}', [ItemController::class, 'detail']);

    Route::middleware('administrator')->group(function () {
        //Account Maintenance
        Route::get('/manage-users', [MaintenanceController::class, 'accountMaintenancePage']);
        Route::get('/updateRole/{id}', [MaintenanceController::class, 'updateRole']);
        Route::post('/updateRole', [MaintenanceController::class, 'updateAccRole']);
        Route::get('/deleteAccount/{id}', [MaintenanceController::class, 'deleteRole']);
    });
});
