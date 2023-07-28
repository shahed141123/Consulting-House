<?php

use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'home'])->name('home');
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/general-info/{id}', [ClientController::class, 'generalInfo'])->name('general.info');
    Route::get('/activity/{id}', [ClientController::class, 'activityInfo'])->name('activity.info');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/add/{id}', [ClientController::class, 'addProfile'])->name('add.profile');
    Route::get('/edit-investor-profile', [ClientController::class, 'investorProfile'])->name('investor.profile');
    Route::get('/edit-franchise-profile', [ClientController::class, 'franchiseProfile'])->name('franchise.profile');
    Route::post('client-image/store', [ClientController::class, 'clientImageStore'])->name('client-image.store');

});

