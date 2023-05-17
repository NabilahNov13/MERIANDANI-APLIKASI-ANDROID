<?php

use App\Http\Controllers\AndroidPopulerController;
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

Route::get('/', [AndroidPopulerController::class, 'index']);
Route::get('/tambah', [AndroidPopulerController::class, 'tambah']);
Route::post('/tambah', [AndroidPopulerController::class, 'store']);
Route::get('/hapus/{id}', [AndroidPopulerController::class, 'hapus']);
Route::get('/edit/{id}', [AndroidPopulerController::class, 'edit']);
Route::post('/edit/{id}', [AndroidPopulerController::class, 'update']);
Route::get('/lihat/{id}', [AndroidPopulerController::class, 'lihat']);