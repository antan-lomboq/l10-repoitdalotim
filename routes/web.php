<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilInstansiController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminDokumenController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfilInstansiController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('dashboard', AdminDashboardController::class);
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', AdminUserController::class);
    Route::resource('kategori', AdminKategoriController::class);
    Route::resource('dokumen', AdminDokumenController::class);
    Route::get('search', [AdminDokumenController::class, 'search'])->name('dokumen.search');
    Route::resource('profil_instansi', AdminProfilInstansiController::class);
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::middleware('auth')->group(function () {
// });
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('search', [DokumenController::class, 'search'])->name('dokumen.search');
Route::get('dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
Route::get('dokumen/{dokuman}', [DokumenController::class, 'show'])->name('dokumen.show');
Route::get('profil_instansi', [ProfilInstansiController::class, 'index'])->name('profil_instansi.index');

require __DIR__ . '/auth.php';
