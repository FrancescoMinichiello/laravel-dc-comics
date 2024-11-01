<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Employee as ModelsEmployee;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = ModelsEmployee::all();
        return view("employees.index", compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("employees.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employeeData = $request->all();
        $newEmployee = new Employee();
        $newEmployee->name = $employeeData["name"];
        $newEmployee->last_name = $employeeData["last_name"];
        $newEmployee->address = $employeeData["address"];
        $newEmployee->phone_number = $employeeData["phone_number"];
        $newEmployee->email = $employeeData["email"];
        $newEmployee->age = $employeeData["age"];
        $newEmployee->nationality = $employeeData["nationality"];
        $newEmployee->save();
        return redirect()->route("employee.show", ["id" => $newEmployee->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = ModelsEmployee::findOrFail($id);
        return view("employees.show", compact("employee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        return view("employees.edit", compact("employee"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->phone_number = $request->phone_number;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->nationality = $request->nationality;
        $employee->update();
        return redirect()->route("employee.show", $employee->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect()->route("index");
    }
}