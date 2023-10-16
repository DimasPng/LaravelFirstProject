<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        $items = Item::find(1);
        dump($items->name);
        dump($items->description);
        dd($items);
    }
}
