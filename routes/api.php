<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ItemPenjualanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
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

Route::get('pelanggan', [PelangganController::class, "getData"]);
Route::post('pelanggan', [PelangganController::class, "store"]);
Route::put('pelanggan', [PelangganController::class, "update"]);
Route::delete('pelanggan', [PelangganController::class, "destroy"]);

Route::get('barang', [BarangController::class, "getData"]);
Route::post('barang', [BarangController::class, "store"]);
Route::put('barang', [BarangController::class, "update"]);
Route::delete('barang', [BarangController::class, "destroy"]);

Route::get('penjualan', [PenjualanController::class, "getData"]);
Route::post('penjualan', [PenjualanController::class, "store"]);
Route::put('penjualan', [PenjualanController::class, "update"]);
Route::delete('penjualan', [PenjualanController::class, "destroy"]);

Route::get('item-penjualan', [ItemPenjualanController::class, "getData"]);
Route::post('item-penjualan', [ItemPenjualanController::class, "store"]);
Route::put('item-penjualan', [ItemPenjualanController::class, "update"]);
Route::delete('item-penjualan', [ItemPenjualanController::class, "destroy"]);
