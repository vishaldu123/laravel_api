<?php

namespace App\Http\Controllers;

use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Employee;


class EmployeeController extends Controller
{
    public function showAllEmployee()
    {
        return response()->json(Employee::all());
    }

    public function showEmployee($emp_id)
    {
        return response()->json(Employee::find($emp_id));
    }

    public function create(Request $request)
    {
        $employee = Employee::create($request->all());

        return response()->json($employee, 201);
    }

    public function update($emp_id, Request $request)
    {
        $employee = Employee::findOrFail($emp_id);
        $employee->update($request->all());

        return response()->json($employee, 200);
    }

    public function delete($emp_id)
    {
        Employee::findOrFail($emp_id)->delete();
        return response('Deleted Successfully', 200);
    }
}