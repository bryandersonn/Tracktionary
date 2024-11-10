<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SongController::class, 'index']);
Route::get('/genre-action/{genre}', [SongController::class, 'genres'])->name('genre.action');
Route::get('/search-action', [SongController::class, 'searches'])->name('search.action');
