<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\MahasiswaController;

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


// ini route dengan controller
Route::get('/sample', [App\Http\Controllers\ContohController::class, 'index']);
Route::get('/show', [ContohController::class, 'show']);
Route::get('/detail', [ContohController::class, 'detail']);

Route::get('/students', [MahasiswaController::class, 'students']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// route dengan parameter
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail']);
