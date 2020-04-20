<!-- resources/views/dashboard/employeeEdit.blade.php -->
@extends('index')
@section('title', 'Edit Employee')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $companyInfo->name }} - <small class="text-muted">{{ $companyInfo->location }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Edit an Employee</p>
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="department">Department Type</label>
                            <select class="form-control" name="department_id" value="{{ old('department_id', $employee->department_id) }}">
                                @foreach ($companyInfo->departments as $option)
                                    <option value="{{$option->id}}">{{ $option->type }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input class="form-control" name="position" value="{{ old('position', $employee->position) }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input class="form-control" name="first_name" value="{{ old('first_name', $employee->first_name) }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input class="form-control" name="last_name" value="{{ old('last_name', $employee->last_name) }}">
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="hiredate">Hire Date</label>
                            <input type="date" class="form-control" name="hire_date" value="{{ old('hire_date', $employee->hire_date) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Delete Employee</button>
        </p>
    </form>
</div>
@endsection