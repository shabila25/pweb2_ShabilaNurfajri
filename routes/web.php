<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/dashboard', function () {
//     return view('sneat.html.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'tampil'])->name('dashboard');
Route::get('/tambah-masuk', [DashboardController::class, 'tambahmasuk'])->name('tambahmasuk');
Route::post('/insert-masuk', [DashboardController::class, 'insertmasuk'])->name('insertmasuk');
// Route::get('/delete', [DashboardController::class, 'delete'])->name('delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::get('/pemasukan', [PemasukanController::class,'index'])->middleware(['auth','verified']);
route::get('/pemasukan/store', [PemasukanController::class,'store'])->middleware(['auth','verified']);
route::delete('/dashboard/{id_anggota}', [DashboardController::class,'delete'])->middleware(['auth','verified']);


require __DIR__.'/auth.php';
