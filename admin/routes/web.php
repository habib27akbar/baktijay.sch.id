<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\IcbjValueController;
use App\Http\Controllers\MsGuruController;
use App\Http\Controllers\MsMapelController;
use App\Http\Controllers\MsRombelController;
use App\Http\Controllers\MsRuangController;
use App\Http\Controllers\MsSekolahController;
use App\Http\Controllers\MsSiswaController;
use App\Http\Controllers\MsTahunAkademikController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SmpBaktijayaController;
use App\Http\Controllers\SmkBaktijayaController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VisiMisiController;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('sejarah', SejarahController::class);
    Route::resource('foto', FotoController::class);
    Route::resource('video', VideoController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('icbj_value', IcbjValueController::class);
    Route::resource('visi_misi', VisiMisiController::class);
    Route::resource('struktur_organisasi', StrukturOrganisasiController::class);
    Route::resource('smp_baktijaya', SmpBaktijayaController::class);
    Route::resource('smk_baktijaya', SmkBaktijayaController::class);
    Route::resource('download', DownloadController::class);
    Route::resource('thn_akademik', MsTahunAkademikController::class);
    Route::post('post_check_thnakad', [AjaxController::class, 'post_check_thnakad'])->name('post_check_thnakad');
    Route::resource('sekolah', MsSekolahController::class);
    Route::resource('siswa', MsSiswaController::class);
    Route::resource('guru', MsGuruController::class);
    Route::resource('mapel', MsMapelController::class);
    Route::resource('rombel', MsRombelController::class);
    Route::resource('ruang', MsRuangController::class);
});;
