<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name("Home");

Route::get("/About", function () {
    return view("About");
})->name("About");
Route::get("/comic/{id}", function ($id) {
    //recupor l id attraverso il find
    $comics = config("comics");
    $comic = collect($comics)->firstWhere('id', $id);

    if (!$comic) {
        abort(404); // Se non trova l'id, mostra pagina 404
    }
    return view("Comic", compact("comic"));
})->name("Comic");
