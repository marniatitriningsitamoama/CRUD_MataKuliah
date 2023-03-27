<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/matakuliahs', \App\Http\Controllers\MataKuliahController::class);
