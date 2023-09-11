<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tugas_controller;

Route::get('/about', [tugas_controller::class, 'menuAbout']); 
Route::get('/home', [tugas_controller::class, 'menuHome']); 

?>
