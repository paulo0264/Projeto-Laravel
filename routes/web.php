<?php

use Illuminate\Support\Facades\Route;

// Paginas restritas
Route::middleware(['auth'])->group(function () {

});
// Fim Paginas restritas

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
