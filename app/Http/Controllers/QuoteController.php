<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index() {
        $quote = Cache::remember('quote.random', 60, function () {
            return Quote::inRandomOrder()->first();
        });

        return view('/rand-quote', ['quote' => $quote]);
    }

}
