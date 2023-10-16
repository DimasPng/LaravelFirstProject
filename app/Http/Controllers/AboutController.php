<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $about = About::find(1);
        dump($about->about);
        dump($about->author);
        dd($about);
    }
}
