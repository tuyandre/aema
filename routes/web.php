<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', [FirebaseController::class, 'firebaseData'])->name('firebaseData.index');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::get('/admin/riders', [AdminController::class, 'getRiders'])->name('admin.riders');
    Route::get('/admin/drivers', [AdminController::class, 'getDrivers'])->name('admin.drivers');
    Route::get('/admin/ambulances', [AdminController::class, 'getAmbulances'])->name('admin.ambulances');
    Route::get('/admin/tracks', [AdminController::class, 'getTracks'])->name('admin.tracks');
    Route::get('/admin/customer_history', [AdminController::class, 'getRiderHistory'])->name('admin.rider.history');
    Route::get('/admin/driver_history', [AdminController::class, 'getDriverHistory'])->name('admin.driver.history');
    Route::get('/admin/pickup_history', [AdminController::class, 'getPickupHistory'])->name('admin.pickup.history');
});

require __DIR__.'/auth.php';
