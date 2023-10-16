<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $cart = Cart::find(2);
        dump($cart->title);
        dump($cart->description);
        dd($cart);
    }
}
