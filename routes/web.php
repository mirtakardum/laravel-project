<?php

use App\Models\Quote;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::middleware(['testing'])->group(function () {
    Route::get('/', function () {
        return view ('helloworld');
    });
});

Route::get('/rand-quote', [QuoteController::class, 'index']);
