<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name("Home");

Route::get("/About", function () {
    return view("About");
})->name("About");
// Route::get(`/comic{id}`, function () {
//     return view("Comic");
// })->name("Comic");
