<?php

use App\Http\Controllers\AdminContactMessageController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
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
Route::get('/programs', [ProgramController::class, 'index']);
Route::get('/programs/{program}', [ProgramController::class, 'show']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [AdminContactMessageController::class, 'store']);

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

        Route::prefix('/admin/posts')->group(function (){
            Route::get('/', [AdminPostController::class, 'index']);
            Route::get('/create', [AdminPostController::class, 'create']);
            Route::post('/', [AdminPostController::class, 'store']);
            Route::get('/{post}/edit', [AdminPostController::class, 'edit']);
            Route::post('/{post}/approve', [AdminPostController::class, 'approve']);
            Route::put('/{post}', [AdminPostController::class, 'update']);
            Route::delete('/{post}', [AdminPostController::class, 'destroy']);
        });

        Route::get('/admin/contact-messages', [AdminContactMessageController::class, 'index']);
    });
});

require __DIR__.'/auth.php';
