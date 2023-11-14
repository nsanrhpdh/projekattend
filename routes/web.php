<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KehadiranController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['admin', 'auth'])
->group(function() {
    Route::resource('prestasi', PrestasiController::class);
    Route::get('/prestasi/cetak', [PrestasiController::class, 'cetak']);

    Route::resource('berita', BeritaController::class);
    
    //kehadiran
    Route::get('kehadiran', 'App\Http\Controllers\KehadiranController@index');
    Route::resource('index', KehadiranController::class);

    //pulang
    Route::get('pulang', 'App\Http\Controllers\PulangController@index');
    Route::resource('index', PulangController::class);

    //keterlambatan
    Route::get('keterlambatan', 'App\Http\Controllers\KeterlambatanController@index');
    Route::resource('index', KeterlambatanController::class);

    //Izin
    Route::get('izin', 'App\Http\Controllers\IzinController@index');
    Route::resource('index', IzinController::class);

    Route::resource('siswa', SiswaController::class);
});

Route::middleware(['auth'])
->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
    Route::get('/kelola-prestasi', [PrestasiController::class, 'kelola'])->name('prestasi.kelola');
    Route::post('/kelola-prestasi', [PrestasiController::class, 'store2'])->name('prestasi.store2');
    Route::delete('/kelola-prestasi/{id}', [PrestasiController::class, 'destroy2'])->name('prestasi.destroy2');
    Route::put('/kelola-prestasi/{id}', [PrestasiController::class, 'update2'])->name('prestasi.update2');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/pages/admin/kehadiran', [KehadiranController::class, 'index']);
    Route::get('/pages/admin/pulang', [PulangController::class, 'index']);
    Route::get('/pages/admin/keterlambatan', [KeterlambatanController::class, 'index']);
    Route::get('/pages/admin/izin', [IzinController::class, 'index']);
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/', [HomeController::class, 'index'])->name('home');


require __DIR__.'/auth.php';
