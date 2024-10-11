<?php

use App\Models\Quote;
use Illuminate\Support\Facades\Route;

Route::middleware(['testing'])->group(function () {
    Route::get('/', function () {
        return view ('helloworld');
    });
});

Route::get('/rand-quote', function () {
    
    $quote = Quote::inRandomOrder()->first();
    
    return view('rand-quote')->with('quote', $quote);
});