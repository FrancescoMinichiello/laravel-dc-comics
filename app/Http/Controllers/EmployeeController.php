<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\employee;
use App\Models\Employee as ModelsEmployee;
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
    public function store(StoreEmployeeRequest $request)
    {
        $validatedData = $request->validated();
        $newEmployee = new Employee();
        $newEmployee->fill($validatedData);
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
    public function update(UpdateEmployeeRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $validatedData = $request->validated();
        $employee->fill($validatedData);
        $employee->update();
        return redirect()->route("employee.show", ["id" => $employee->id]);
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
