<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        $price = Price::find(1);
        dump($price->product);
        dump($price->price);
        dump($price->sale_price);
        dd($price);
    }
}
