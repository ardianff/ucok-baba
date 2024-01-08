<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('guest.home');
Route::get('map', [HomeController::class, 'getMaps'])->name('guest.map');

Auth::routes();
Route::prefix('administrator')->middleware(['admin'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
});
