<?php

namespace App\Http\Controllers;

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
        return view("employee.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }
}
