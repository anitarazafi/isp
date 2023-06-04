<?php

use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::middleware('admin')->group(function (){
        Route::prefix('/admin/programs')->group(function (){
            Route::get('/', [AdminProgramController::class, 'index']);
            Route::get('/create', [AdminProgramController::class, 'create']);
            Route::post('/', [AdminProgramController::class, 'store']);
            Route::get('/{program}/edit', [AdminProgramController::class, 'edit']);
            Route::put('/{program}', [AdminProgramController::class, 'update']);
            Route::delete('/{program}', [AdminProgramController::class, 'destroy']);
        });
    });
});

require __DIR__.'/auth.php';
