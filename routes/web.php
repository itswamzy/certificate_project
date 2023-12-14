<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/service', [ServiceController::class,'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class,'create'])->name('service.create');
    Route::post('/service', [ServiceController::class,'store'])->name('service.store');
    Route::get('/service/{service}/edit', [ServiceController::class,'edit'])->name('service.edit');
    Route::put('/service/{service}/update', [ServiceController::class,'update'])->name('service.update');
    Route::delete('/service/{service}/destroy', [ServiceController::class,'destroy'])->name('service.destroy');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
