<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index() {
        $policy = Policy::find(1);
        dump($policy->title);
        dump($policy->description);
        dump($policy->main_text);
        dd($policy);
    }
}
