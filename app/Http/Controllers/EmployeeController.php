<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('index', compact('employees'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'worker_name' => 'required',
            'id_worker' => 'required|unique:employees',
            'hired_date' => 'required|date',
            'email' => 'required|email|unique:employees',
        ]);

        Employee::create($request->all());
        return redirect()->route('index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        return view('edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'worker_name' => 'required',
            'id_worker' => 'required|unique:employees,personal_id,' . $employee->id,
            'hired_date' => 'required|date',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
