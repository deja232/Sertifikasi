<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.customer');
});
Route::get('/form', function () {
    return view('orderform');
});
Route::get('/vehicleform', function () {
    return view('vehicleform');
});
Route::get('/editcustomer', function () {
    return view('customeredit');
});
Route::get('/vehicle', function () {
    return view('vehicle');
});

Route::resource('vehicle',VehicleController::class);
Route::resource('orderform',OrderController::class);
Route::resource('customer',CustomerController::class);
Route::get('/', [CustomerController::class, 'index']);
