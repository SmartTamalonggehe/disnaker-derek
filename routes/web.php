<?php

use App\Http\Controllers\Auth\ChecAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Pencaker\DashboardController;
use App\Http\Controllers\Pencaker\KartuKuningController;
use App\Http\Controllers\Pencaker\LowonganController;
use App\Http\Controllers\Pencaker\PelatihanController;
use App\Http\Controllers\Pencaker\PencakerController;
use App\Http\Controllers\Pencaker\PendidikanController;
use App\Http\Controllers\Pencaker\PersyaratanController;
use App\Http\Controllers\Pencaker\TentangKamiController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
//     return view('welcome');
// });

Route::get('/cekAuth', [ChecAuthController::class, 'index'])->name('cekAuth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [DashboardController::class, 'index'])->name('pencaker');
Route::resource('pencakerPelatihan', PelatihanController::class);
Route::resource('lowonganPencaker', LowonganController::class);

Route::get('/pencaker.tentang_kami.index', function () {
    return view('pencaker.tentang_kami.index');
})->name('tentangKami');

Route::group(['middelare' => ['auth','role:pencaker']], function () {
    Route::resource('pencaker', PencakerController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('persyaratan', PersyaratanController::class);
    Route::get('kartuKuning', [KartuKuningController::class, 'index'])->name('kartuKuning');
    Route::get('CetakKartu', [KartuKuningController::class, 'cetakKartu'])->name('CetakKartu');
});


