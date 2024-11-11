<?php

use App\Livewire\Opportunities;
use Illuminate\Support\Facades\Route;

// LIVEWIRE ROUTES
Route::get('/opportunities', Opportunities::class);

Route::get('/', function () {
    return view('welcome');
});