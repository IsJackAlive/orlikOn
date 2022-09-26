<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PitchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/games/new/{pitch_id}', [GameController::class, 'new'])->name('games.new');

Route::get('/game/{game}/join', [GameController::class, 'join'])->name('games.join');
Route::post('/games/create/{pitch_id}', [GameController::class, 'store']);
Route::resource('games', GameController::class);

Route::get('/pitches/search', [PitchController::class, 'search'])->name('pitches.search');
Route::resource('pitches', PitchController::class);