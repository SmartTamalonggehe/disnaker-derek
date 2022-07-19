<?php

use App\Http\Controllers\API\LowonganApi;
use App\Http\Controllers\API\PelatihanApi;
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

Route::get('lowongan/show/{id}', [LowonganApi::class, 'show'])->name('api.lowongan.show');
Route::get('pelatihan/show/{id}', [PelatihanApi::class, 'show'])->name('api.pelatihan.show');
