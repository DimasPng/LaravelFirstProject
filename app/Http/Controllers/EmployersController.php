<?php

namespace App\Http\Controllers;

use App\Models\Employers;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    public function index() {

        $employers = Employers::All();
        return view('employers.index', compact('employers'));

    }

    public function create() {
        return view('employers.create');
    }

    public function store() {
        $data = request()->validate([
            "name"=>'string',
            "surname"=>'string',
            "email"=>'string'
        ]);
        Employers::create($data);
        return redirect()->route('employers.index');
    }


}
