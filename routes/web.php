<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;


Route::get('/flights', [FlightsController::class, 'index'])->name('flight.index');
Route::get('/', function () {
    return view('index');
});
Route::get('/flights/create', [FlightsController::class, 'create'])->name('flight.create');
Route::post('/flights', [FlightsController::class, 'store'])->name('flight.store');
Route::get('/flights/{flight}', [FlightsController::class, 'show'])->name('flight.show');
Route::get('/flights/{flight}/edit', [FlightsController::class, 'edit'])->name('flight.edit');
Route::put('/flights/{flight}', [FlightsController::class, 'update'])->name('flight.update');
Route::delete('/flights/{flight}', [FlightsController::class, 'destroy'])->name('flight.destroy');

Route::get('/flights/{flight}/drop', [FlightsController::class, 'drop'])->name('flight.drop');
