<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

  public function index() {

    $emps = Employee::all();

    return view('emp_index', compact('emps'));
  }

  public function show($id) {

    $emp = Employee::findOrFail($id);

    return view('emp_show', compact('emp'));
  }

  public function create() {

    $locs = Location::all();

    return view('emp_create', compact('locs'));

  }

  public function store(Request $request) {

    $data = $request -> all();
    Employee::create($data);

    return redirect() -> route('emp_index');

  }
}
