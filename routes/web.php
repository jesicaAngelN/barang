<?php

use App\Http\Controllers\barangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});     

Route::get('/barang', [barangController::class, 'listbarang'])->name('listbarang');
Route::get('/detail{id}', [barangController::class, 'detailbarang'])->name('detailbarang');
Route::get('/tambah', [barangController::class, 'tambahbarang'])->name('tambahbarang');
Route::post('/simpan', [barangController::class, 'simpanbarang'])->name('simpanbarang');
Route::get('/edit{id}', [barangController::class, 'editbarang'])->name('editbarang');
Route::post('/update{id}', [barangController::class, 'updatebarang'])->name('updatebarang');
Route::delete('/hapus{id}', [barangController::class, 'hapusbarang'])->name('hapusbarang');
