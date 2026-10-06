<?php

use App\Http\Controllers\TextController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



 Route::get('/index', [TextController::class, 'index'])->name('index');
