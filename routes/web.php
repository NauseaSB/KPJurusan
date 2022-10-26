<?php

use App\Models\kp1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kp1Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DaftarKPController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\DashboardTUController;
use App\Http\Controllers\DashboardKoorController;
use App\Http\Controllers\DaftarMateriKPController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\Kp2Controller;
use App\Http\Controllers\RekapController;

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
        Route::get('/admin', [DashboardAdminController::class, 'index'])->middleware('auth');
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

        //halaman daftar kp2
        Route::get('/daftar-kp2', [Kp2Controller::class, 'index'])->middleware('auth');

        //halaman edit daftar kp2

        // dummy
        Route::get('/test', [KelompokController::class, 'index']);
    });

    //route group untuk role KOORDINATOR
    Route::group(['middleware' => 'role:koodinatorKP'], function () {
        Route::get('/koorkp', [DashboardKoorController::class, 'index'])->middleware('auth');
        Route::get('/koorkp/set-status/{id}', [DashboardKoorController::class, 'edit']);
        Route::post('/koorkp/set-status/{id}', [DashboardKoorController::class, 'update']);
        Route::get('/rekap-kp', [RekapController::class, 'index']);
    });

    //route group untuk role TATA USAHA
    Route::group(['middleware' => 'role:tataUsaha'], function () {
        Route::get('/TU', [DashboardTUController::class, 'index'])->middleware('auth');
        Route::get('/TU/set-status/{id}', [DashboardTUController::class, 'edit']);
        Route::post('/TU/set-status/{id}', [DashboardTUController::class, 'update']);
    });
});
