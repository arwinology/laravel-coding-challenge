@extends('index')
@section('title', 'Employees')
@section('content')
<div class="container mt-5">
    <h2>Your Employees</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Company</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Guests</th>
            <th scope="col">Position</th>
            <th scope="col">Hire Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->department->company['name'] }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->hire_date }}</td>
            <td><a href="/dashboard/employees/{{ $employee->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
            </tr>
            @endforeach          
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection