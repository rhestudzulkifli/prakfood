<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExplorController;

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

Route::get('/', function () {
    return view('master');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::middleware(['auth'])->group(function () {
    // Rute halaman dashboard
    Route::get('/dashboard', function () {
        return view('master');
    })->name('dashboard');
});
// routes/web.php

Route::get('/explor', function () {
    return view('explor'); // Updated to use 'explor'
})->name('explor');

Route::post('/explor', [EksplorController::class, 'store'])->name('explor.store');

Route::get('/explor', [ExplorController::class, 'showExplorations'])->name('explor');
Route::get('/explor/{id}/edit', [ExplorController::class, 'edit'])->name('explor.edit');
Route::delete('/explor/{id}', [ExplorController::class, 'destroy'])->name('explor.destroy');
Route::get('/transaksis', [TransaksiController::class, 'showTransaksis'])->name('transaksis');

