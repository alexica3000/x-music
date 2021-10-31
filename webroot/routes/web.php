<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TagsTypeController;
use App\Http\Controllers\Admin\TrackController;
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

        Route::prefix('tags-type')->name('tags-type.')->group(function() {
            Route::get('/', [TagsTypeController::class, 'index'])->name('index');
            Route::get('create', [TagsTypeController::class, 'create'])->name('create');
            Route::get('edit/{tagsType}', [TagsTypeController::class, 'edit'])->name('edit');
        });

        Route::prefix('tags')->name('tags.')->group(function() {
            Route::get('/', [TagController::class, 'index'])->name('index');
            Route::get('create', [TagController::class, 'create'])->name('create');
            Route::get('edit/{tag}', [TagController::class, 'edit'])->name('edit');
        });

        Route::prefix('tracks')->name('tracks.')->group(function() {
            Route::get('/', [TrackController::class, 'index'])->name('index');
            Route::get('create', [TrackController::class, 'create'])->name('create');
            Route::get('edit/{track}', [TrackController::class, 'edit'])->name('edit');
        });
    });
});
