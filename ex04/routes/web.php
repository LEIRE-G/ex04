<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendasController;

Route::get('/', function () {
    return view('welcome');
    return redirect()->route('prendas.index');
});

Route::resource('prendas', PrendasController::class);
