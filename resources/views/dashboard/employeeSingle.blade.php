<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Edit Employee')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all booked for the {{ $companyInfo->name }} in {{ $companyInfo->location }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $companyInfo->image }}" class="img-fluid" alt="Front of hotel">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $companyInfo->name }} - <small>{{ $companyInfo->location }}</small>
                        </h3>
                        <p class="card-text">{{ $companyInfo->description }}</p>
                        <p class="card-text"><strong>Firstname: </strong>{{ $employee->first_name }}</p>
                        <p class="card-text"><strong>Lastname: </strong>{{ $employee->last_name }}</p>
                        <p class="card-text"><strong>Position: </strong>{{ $employee->position }}</p>
                    </div>                  
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/reservations/{{ $employee->id }}/edit" class="btn btn-lg btn-success">Edit this employee</a>
                    <a href="/dashboard/reservations/{{ $employee->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection