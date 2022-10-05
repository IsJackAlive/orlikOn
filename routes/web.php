<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PitchController;

// Route::get('/', function () { return view('welcome'); });

Route::controller(GameController::class)->group(function () {
    Route::get('/', 'index')->name('games.new');;
    Route::get('/games/{pitch}/new', 'new')->name('games.new');
    Route::put('/games/{id}', 'update')->name('games.update');
});
Route::resource('games', GameController::class);

Route::controller(PitchController::class)->group(function () {
    Route::get('/pitches/search', 'search')->name('pitches.search');
});
Route::resource('pitches', PitchController::class);