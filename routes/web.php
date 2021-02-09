<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UndanganController;

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

 Route::get("/", [UndanganController::class, 'index'])->name('home');

 Route::group(["prefix"=>"undangan"], function () {
     Route::post("/buat", [UndanganController::class, 'buatUndangan'])->name('undangan.buat');
     Route::get("/uploadfoto", [UndanganController::class, 'uploadfoto'])->name('undangan.uploadfoto');
 });
