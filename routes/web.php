<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\FrameController;
use App\Http\Controllers\TrunkController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UpgradeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [UserController::class,'homepage'])->name('homepage');

Route::get('/vehicle-cabins',[CabinController::class,'cabins'])->name('vehicle-cabins');
Route::get('/vehicle-cabins/{id}',[CabinController::class,'cabinDetails'])->name('cabin-details');

Route::get('/vehicle-frames',[FrameController::class,'frames'])->name('vehicle-frames');
Route::get('/vehicle-frames/{id}',[FrameController::class,'frameDetails'])->name('frame-details');

Route::get('/vehicle-trunks',[TrunkController::class, 'trunks'])->name('vehicle-trunks');
Route::get('/vehicle-trunks/{id}',[TrunkController::class, 'trunkDetails'])->name('trunk-details');

Route::get('/vehicle-upgrades',[UpgradeController::class,'upgrades'])->name('vehicle-upgrades');
Route::get('/vehicle-upgrades/{id}',[UpgradeController::class,'upgradeDetails'])->name('upgrade-details');

Route::get('/types',[TypeController::class,'types'])->name('types');

Route::get('/dashboard', function () {
    return view('homepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/deals', [AdminController::class, 'dealsForm'])->name('deals-form');
    Route::post('/deals', [AdminController::class, 'deals'])->name('deals-processing');
    Route::get('/deals-list', [AdminController::class, 'listDeals'])->name('list-deals');
    Route::get('/deal-details/{id}',[AdminController::class, 'dealDetails'])->name('deal-details');
    Route::post('/deal-details/{id}',[AdminController::class, 'changeStatus'])->name('change-status');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

require __DIR__.'/auth.php';
