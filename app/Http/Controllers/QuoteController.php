<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Quote;
use App\Models\Author;

class QuoteController extends Controller
{
    public function index() {

        $quote = Cache::remember('quote.random', 60, function () {

            return $quote = Quote::with('author')->first();
        });

        return view('/rand-quote', compact('quote'));
    }

}
