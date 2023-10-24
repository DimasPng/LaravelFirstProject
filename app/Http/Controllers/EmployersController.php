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

    public function show(Employers $employee) {
        return view('employers.show', compact('employee'));
    }

    public function edit(Employers $employee) {
        return view('employers.edit', compact('employee'));
    }

    public function update(Employers $employee) {
        $data = request()->validate([
            "name"=>"string",
            "surname"=>"string",
            "email"=>"string"
        ]);
        $employee->update($data);
        return redirect()->route('employers.index');
    }

    public function destroy(Employers $employee) {
        $employee->delete();
        return redirect()->route('employers.index');
    }


}
