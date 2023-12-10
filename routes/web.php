<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LibraryController;
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
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');

Route::get('/profiles/{id}', [ProfileController::class, 'show'])->name('profiles.show');

Route::get('/libraries', [LibraryController::class, 'index'])->name('libraries.index');

Route::get('/libraries/{id}', [LibraryController::class, 'show'])->name('libraries.show');