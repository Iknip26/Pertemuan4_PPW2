<?php

use Illuminate\Support\Facades\Route;


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