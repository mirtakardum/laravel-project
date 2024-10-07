<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['testing'])->group(function () {
    Route::get('/', function () {
        return view ('helloworld');
    });
});