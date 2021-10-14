<?php

use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::prefix('/dashboard')->middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::view('/', 'dashboard')->name('dashboard');

    Route::middleware(['isAdmin'])->name('admin.')->group(function() {
        Route::prefix('users')->name('users.')->group(function() {
            Route::get('/', [AdminUserController::class, 'index'])->name('index');
            Route::get('create', [AdminUserController::class, 'create'])->name('create');
            Route::get('edit/{user}', [AdminUserController::class, 'edit'])->name('edit');
        });
    });
});
