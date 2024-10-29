<?php

namespace App\Http\Controllers;

use App\Models\CreateEmployee;
use Illuminate\Http\Request;

class CreateEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("creates.create");
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
    public function show(CreateEmployee $createEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreateEmployee $createEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CreateEmployee $createEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreateEmployee $createEmployee)
    {
        //
    }
}