<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IcbjValueController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SmkBaktijayaController;
use App\Http\Controllers\SmpBaktijayaController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VisiMisiController;

/*
|-------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('sejarah', SejarahController::class);
Route::resource('icbj_value', IcbjValueController::class);
Route::resource('visi_misi', VisiMisiController::class);
Route::resource('struktur_organisasi', StrukturOrganisasiController::class);
Route::resource('smp_baktijaya', SmpBaktijayaController::class);
Route::resource('smk_baktijaya', SmkBaktijayaController::class);
Route::resource('foto', FotoController::class);
Route::resource('video', VideoController::class);
Route::resource('download', DownloadController::class);
Route::resource('kontak', KontakController::class);
Route::resource('pendaftaran', PendaftaranController::class);
// Route::post('checkout', [PendaftaranController::class, 'checkout'])->name('checkout');
Route::get('checkout/{id}', [PendaftaranController::class, 'checkout']);
Route::post('midtrans-callback', [PendaftaranController::class, 'callback']);
