<?php

use App\Models\kp1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlotingDosen;
use App\Http\Controllers\Kp1Controller;
use App\Http\Controllers\Kp2Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DaftarKPController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BukaTutupController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\DashboardTUController;
use App\Http\Controllers\DashboardKoorController;
use App\Http\Controllers\DaftarMateriKPController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardKP2Controller;

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

Route::get('/test', [KelompokController::class, 'index']);

//route Login
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//route group untuk otentikasi setiap role
Route::group(['middleware' => 'auth'], function () {

    //route group untuk role ADMIN
    Route::group(['middleware' => 'role:admin'], function () {
        //halaman utama
        Route::get('/admin', [DashboardAdminController::class, 'index'])->middleware('auth');

        //halaman tambah akun
        Route::get('/tambah-akun', [DashboardAdminController::class, 'create']);
        Route::post('/tambah-akun', [DashboardAdminController::class, 'store']);

        //halaman edit akun
        Route::get('/edit-akun/{id}', [DashboardAdminController::class, 'edit']);
        Route::post('/edit-akun/{id}', [DashboardAdminController::class, 'update']);

        //delete akun
        Route::post('/delete-akun/{id}', [DashboardAdminController::class, 'destroy']);
    });

    //route group untuk role MAHASISWA
    Route::group(['middleware' => 'role:mahasiswa'], function () {
        //halaman utama
        Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

        //halaman daftar kelompok
        Route::get('/daftar-kelompok-kp', [DaftarKPController::class, 'index'])->middleware('auth');
        Route::post('/daftar-kelompok', [DaftarKPController::class, 'store']);

        //halaman edit daftar kelompok
        Route::get('/edit-kelompok', [DaftarKPController::class, 'edit']);
        Route::post('/edit-kelompok', [DaftarKPController::class, 'update']);

        //halaman daftar kp1
        Route::get('/daftar-kp1', [Kp1Controller::class, 'index'])->middleware('auth');
        Route::post('/daftarkp', [Kp1Controller::class, 'store']);

        //halaman edit daftar kp1
        Route::get('/edit-data-kp1', [Kp1Controller::class, 'edit']);
        Route::post('/edit-data-kp1', [Kp1Controller::class, 'update']);

        //halaman daftar materi kp
        Route::get('/daftar-materi-kp', [MateriController::class, 'index'])->middleware('auth');
        Route::post('/daftar-materi-kp', [MateriController::class, 'store']);

        //halaman edit daftar materi kp
        Route::get('/edit-data-kp', [MateriController::class, 'edit']);
        Route::post('/edit-data-kp', [MateriController::class, 'update']);

        //halaman daftar kp2
        Route::get('/daftar-kp2', [Kp2Controller::class, 'index'])->middleware('auth');
        Route::post('/daftar-kp2', [Kp2Controller::class, 'store']);

        //halaman edit daftar kp2
        Route::get('/edit-data-kp2', [Kp2Controller::class, 'edit']);
        Route::post('/edit-data-kp2', [Kp2Controller::class, 'update']);

        // dummy
        Route::get('/test', [KelompokController::class, 'index']);
    });

    //route group untuk role KOORDINATOR
    Route::group(['middleware' => 'role:koodinatorKP'], function () {
        //halaman utama
        Route::get('/koorkp', [DashboardKoorController::class, 'index'])->middleware('auth');

        //halaman rekap data pendaftaran kp
        Route::get('/koorkp/rekap-pdf', [DashboardKoorController::class, 'rpdf']);

        //halaman edit status mahasiswa
        Route::get('/koorkp/set-status/{id}', [DashboardKoorController::class, 'edit']);
        Route::post('/koorkp/set-status/{id}', [DashboardKoorController::class, 'update']);

        //halaman rekap
        Route::get('/rekap-kp', [RekapController::class, 'index']);
        Route::get('/rekap-kp/rekap-pdf', [RekapController::class, 'rpdf']);

        //halaman ploting dosen
        Route::resource('/ploting-dosen', PlotingDosen::class);

        //halaman data pendaftaran kp2
        route::get('/data-kp2', [DashboardKP2Controller::class, 'index']);

        //halaman edit status mahasiswa kp2
        Route::get('/data-kp2/set-status/{id}', [DashboardKP2Controller::class, 'edit']);
        Route::post('/data-kp2/set-status/{id}', [DashboardKP2Controller::class, 'update']);

        //halaman switch form
        Route::get('/bukatutupform', [BukaTutupController::class, 'index']);
        Route::post('/bukatutupkp1', [BukaTutupController::class, 'lockKP1']);
        Route::post('/bukatutupkp2', [BukaTutupController::class, 'lockKP2']);
    });

    //route group untuk role TATA USAHA
    Route::group(['middleware' => 'role:tataUsaha'], function () {
        Route::get('/TU', [DashboardTUController::class, 'index'])->middleware('auth');
        Route::get('/TU/set-status/{id}', [DashboardTUController::class, 'edit']);
        Route::post('/TU/set-status/{id}', [DashboardTUController::class, 'update']);
    });
});
