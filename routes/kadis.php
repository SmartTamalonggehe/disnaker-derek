<?php

use App\Http\Controllers\Pimpinan\DashboardController;
use App\Http\Controllers\Pimpinan\LowonganController;
use App\Http\Controllers\Pimpinan\PelatihanController;
use App\Http\Controllers\Pimpinan\PencakerController;
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

// Route::get('/', function () {
//     return view('kadis.dashboard.index');
// });

Route::get('/', [DashboardController::class, 'index'])->name('kadis');

Route::resource('pencakerKadis', PencakerController::class);
Route::resource('lokerKadis', LowonganController::class);
Route::resource('pelatihanKadis', PelatihanController::class);
