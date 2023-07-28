<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\VendorProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/client.php';
require __DIR__ . '/vendor.php';
require __DIR__ . '/frontend.php';

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [ClientController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('client/pages/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::get('/vendor/dashboard', function () {
    return view('vendor/dashboard');
})->middleware(['auth:vendor', 'verified'])->name('vendor.dashboard');



Route::middleware('auth:vendor')->prefix('vendor')->name('vendor.')->group(function () {
    Route::get('/profile', [VendorProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [VendorProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [VendorProfileController::class, 'destroy'])->name('profile.destroy');
});


