<!-- resources/views/hotels.blade.php -->
@extends('index')
@section('title', 'Companies')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        @foreach ($companies as $company)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('{{ $company->image }}');height:300px;background-size:cover;" class="img-fluid" alt="Company Logo"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $company->name }}</h5>
                    <small class="text-muted">{{ $company->location }}</small>
                    <p class="card-text">{{ $company->description }}</p>
                    <a href="/dashboard/employees/create/{{ $company->id }}" class="btn btn-primary">Add an Employee</a>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection