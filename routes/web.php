<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SneakerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [SneakerController::class, 'all'])->name('sneakers');
Route::get('/dashboard/brands', [BrandController::class, 'create'])->name('brands');
Route::get('/sneakers', [SneakerController::class, 'index'])->name('sneakers.index');

Route::resource('/sneakers', SneakerController::class)->middleware(['auth', 'verified']);

Route::resource('/brands', BrandController::class)->middleware(['auth', 'verified']);

Route::resource('/admin-dashboard', UserController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard/overview-sneakers', [SneakerController::class, 'overview'])->name('overview-sneakers');

require __DIR__.'/auth.php';
