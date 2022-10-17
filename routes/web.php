<?php

use App\Http\Controllers\DaftarKP1Controller;
use App\Http\Controllers\DaftarKP2Controller;
use App\Http\Controllers\DaftarKPController;
use App\Http\Controllers\DaftarMateriKPController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\Kp1Controller;
use App\Http\Controllers\MateriController;
use App\Models\kp1;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware'=> 'auth'], function(){
    Route::group(['middleware' => 'role:admin'], function(){
        Route::get('/admin', function(){
            return 'Hello Admin!';
        });
    });
    Route::group(['middleware' => 'role:mahasiswa'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

        Route::get('/daftar-kelompok-kp', [DaftarKPController::class, 'index'])->middleware('auth');

        Route::post('/daftar-kelompok', [DaftarKPController::class, 'store']);

        Route::get('/test', [KelompokController::class, 'index']);

        Route::get('/daftar-kp1', [Kp1Controller::class, 'index'])->middleware('auth');

        Route::post('/daftarkp', [Kp1Controller::class, 'store']);

        Route::get('/daftar-materi-kp', [MateriController::class, 'index'])->middleware('auth');

        Route::post('/daftar-materi-kp', [MateriController::class, 'store']);

        Route::get('/daftar-kp2', [DaftarKP2Controller::class, 'index'])->middleware('auth');
    });
    Route::group(['middleware' => 'role:koodinatorKP'], function(){
        Route::get('/koorkp', function(){
            return 'Hello KoorKP!';
        });
    });
    Route::group(['middleware' => 'role:tataUsaha'], function(){
        Route::get('/TU', function(){
            return 'Hello TU!';
        });
    });
});

