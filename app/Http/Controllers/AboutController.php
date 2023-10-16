<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $post = About::find(1);
        dd($post);
    }
}
