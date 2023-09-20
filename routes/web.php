<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tugas_controller;
use App\Http\Controllers\buku_controller;

// Pertemuan 5 ( model dan seeder )
Route::get('/buku', [buku_controller::class, 'index']);
?>
