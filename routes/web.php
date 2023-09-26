<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tugas_controller;
use App\Http\Controllers\buku_controller;
use App\Models\buku;

// Pertemuan 5 ( model dan seeder )
Route::get('/buku', [buku_controller::class, 'index']);


// Pertemuan 6 CRUD
Route::get('/buku/create', [buku_controller::class, 'create'])->name('buku.create');
Route::post('/buku', [buku_controller::class, 'store'])->name('buku.store');

Route::post('/buku/delete/{id}', [buku_controller::class, 'destroy'])->name('buku.destroy');


Route::get('/buku/edit/{id}', [buku_controller::class, 'edit'])->name('buku.edit');
Route::post('/buku/edit/data/{id}', [buku_controller::class, 'update'])->name('buku.update');

?>
