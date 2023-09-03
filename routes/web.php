<?php

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

Route::get('/home123', function () {
    return view('home', [
        "tittle" => "Home",
        "name" => "hanif",
        "email" => "hanif123@gmail.com"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "hanif",
        "email" => "hanif123@gmail.com"
    ]);
});
?>