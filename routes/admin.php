<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrikController;
use App\Http\Controllers\Admin\KelurahanController;
use App\Http\Controllers\Admin\LowonganController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\PencakerController;
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
//     return view('admin.dashboard.index');
// });

// Route::prefix('admin')->middleware('auth','role:admin')->group(function (){

    Route::get('/', [DashboardController::class, 'index'])->name('admin');

    Route::resource('distrik', DistrikController::class);
    Route::resource('kelurahan', KelurahanController::class);
    Route::resource('pelatihan', PelatihanController::class);

    Route::resource('pencakerAdmin', PencakerController::class);
    Route::resource('loker', LowonganController::class);

// });
