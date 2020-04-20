<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Company;
use App\Models\Department;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $employees = Employee::with('department', 'department.company')
        ->orderBy('hire_date', 'asc')
        ->get();

      return view('dashboard.employees')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id)
    {
      $companyInfo = Company::with('departments')->get()->find($company_id);
      return view('dashboard.employeeCreate', compact('companyInfo'));
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->request->add(['department_id' => 1]);
      Employee::create($request->all());

      return redirect('dashboard/employees')->with('success', 'Employee Added!');
    }

    /**
     * Display the specified employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
      $employee = Employee::with('department', 'department.company')->get()->find($employee->id);
      $company_id = $employee->department->company_id;
      $companyInfo = Company::with('departments')->get()->find($company_id);

      return view('dashboard.employeeSingle', compact('employee', 'companyInfo'));
    }

    /**
     * Show the form for editing the specified Employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
      $employee = Employee::with('department', 'department.company')->get()->find($employee->id);
      $company_id = $employee->department->company_id;
      $companyInfo = Company::with('departments')->get()->find($company_id);

      return view('dashboard.employeeEdit', compact('employee', 'companyInfo'));
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
      //$employee->user_id = 1;
      $request->request->add(['department_id' => 1]);
      $employee->update($request->all());
      return redirect('dashboard/employees')->with('success', 'Successfully updated an employee!');
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
      $employee = Employee::find($employee->id);
      $employee->delete(); 

      return redirect('dashboard/employees')->with('success', 'Successfully deleted an employee!');
    }
}