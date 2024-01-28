<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MatakuliahController;
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

Route::get('/', [MhsController::class,'tampilSemua']);
Route::get('/mhs/tambah', [MhsController::class,'formTambah'])->middleware('is_staf_manajer');
Route::get('/mhs/ubah/{id}', [MhsController::class,'formUbah'])->middleware('is_staf_manajer');
Route::get('/mhs/hapus/{id}', [MhsController::class,'formHapus'])->middleware('is_manajer');
Route::get('/mhs', [MhsController::class,'tampilSemua']);
Route::get('/mhs/{id}', [MhsController::class,'tampil']);
Route::post('/mhs', [MhsController::class,'tambah'])->middleware('is_staf_manajer');
Route::patch('/mhs/{id}', [MhsController::class,'ubah'])->middleware('is_staf_manajer');
Route::delete('/mhs/{id}', [MhsController::class,'hapus'])->middleware('is_manajer');

Route::get('/mtk/tambah', [MatakuliahController::class,'formTambah']);
Route::get('/mtk/ubah/{id}', [MatakuliahController::class,'formUbah']);
Route::get('/mtk/hapus/{id}', [MatakuliahController::class,'formHapus']);
Route::get('/mtk', [MatakuliahController::class,'tampilSemua']);
Route::get('/mtk/{id}', [MatakuliahController::class,'tampil']);
Route::post('/mtk', [MatakuliahController::class,'tambah']);
Route::patch('/mtk/{id}', [MatakuliahController::class,'ubah']);
Route::delete('/mtk/{id}', [MatakuliahController::class,'hapus']);

// Grouping dosen Routes
Route::get('/dosen', [DosenController::class,'tampilSemua']);
Route::get('/dosen/{id}', [DosenController::class,'tampil']);

Route::middleware('is_manajer')->group(function () {
    Route::get('/dosen/tambah', [DosenController::class, 'formTambah']);
    Route::get('/dosen/ubah/{id}', [DosenController::class, 'formUbah']);
    Route::get('/dosen/hapus/{id}', [DosenController::class, 'formHapus']);
    Route::post('/dosen', [DosenController::class, 'tambah']);
    Route::put('/dosen/{id}', [DosenController::class, 'ubah']);
    Route::delete('/dosen/{id}', [DosenController::class, 'hapus']);
});

Route::middleware('is_staf')->group(function () {
    Route::get('/dosen/ubah/{id}', [DosenController::class, 'formUbah']);
    Route::put('/dosen/{id}', [DosenController::class, 'ubah']);
});

