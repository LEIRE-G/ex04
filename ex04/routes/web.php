<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendasController;

Route::get('/', function () {
    return redirect()->route('prendas.index');
});

Route::get('prendas/{id}/confirmDelete', [PrendasController::class, 'confirmDelete'])->name('prendas.confirmDelete');
Route::resource('prendas', PrendasController::class);

