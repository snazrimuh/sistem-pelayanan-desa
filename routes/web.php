<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

use App\Http\Controllers\PelayananController;

Route::get('/pelayanan/create', [PelayananController::class, 'create'])->name('pelayanan.create');
Route::post('/pelayanan/store', [PelayananController::class, 'store'])->name('pelayanan.store');

use App\Http\Controllers\AuthController;

Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
// Route::get('admin/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');
// Route::post('admin/register', [AuthController::class, 'register'])->name('admin.register');

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

use App\Http\Controllers\AdminController;

// Routes untuk admin
Route::middleware('auth:admin')->group(function () {
    Route::get('admin/pelayanan', [AdminController::class, 'index'])->name('admin.pelayanan.index');
    Route::delete('admin/pelayanan/{id}', [AdminController::class, 'destroy'])->name('admin.pelayanan.destroy');
    Route::get('admin/pelayanan/{id}', [AdminController::class, 'show'])->name('admin.pelayanan.show');
    Route::get('admin/pelayanan/{id}/cetak', [AdminController::class, 'cetakPDF'])->name('admin.pelayanan.cetak');
    Route::get('admin/pelayanan/{id}/edit', [AdminController::class, 'edit'])->name('admin.pelayanan.edit');
    Route::put('admin/pelayanan/{id}', [AdminController::class, 'update'])->name('admin.pelayanan.update');
});