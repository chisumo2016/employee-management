<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\EmployeeUpdateRequest;
use App\Http\Requests\API\EmploymentStoreRequest;
use App\Http\Resources\API\EmployeeResource;
use App\Http\Resources\API\EmployeeSingleResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return EmployeeResource::collection($employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmploymentStoreRequest $request)
    {
        $employee = Employee::create($request->validated());

        return response()->json($employee);
    }


    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return new EmployeeSingleResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( EmployeeUpdateRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json('Employee Deleted Successfully');
    }
}
