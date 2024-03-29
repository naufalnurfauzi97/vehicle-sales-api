<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanPerKendaraanController;
use App\Models\Kendaraan;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/kendaraan', [KendaraanController::class, 'getKendaraan']);
// Route::post('/addkendaraan', [KendaraanController::class, 'addKendaraan']);
// Route::post('/addkendaraan', [KendaraanController::class, 'addKendaraan']);

//Routing Kendaraan
Route::resource('kendaraan', KendaraanController::class);
Route::resource('motor', MotorController::class);
Route::resource('mobil', MobilController::class);

Route::get('/kendaraans/stokAll', [KendaraanController::class, 'getStokAll']);
Route::get('/kendaraans/stokMotor', [KendaraanController::class, 'getStokMotor']);
Route::get('/kendaraans/stokMobil', [KendaraanController::class, 'getStokMobil']);

//Routing Penjualan
Route::post('kendaraans/penjualan/{id}', [PenjualanController::class, 'penjualan']);
Route::get('kendaraans/penjualanPerKendaraan', [PenjualanPerKendaraanController::class, 'getPenjualanPerKendaraan']);
