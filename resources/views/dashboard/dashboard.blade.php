<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage your Employees</h4>
                <p class="card-text">Modify your employee data.</p>
                <a href="/dashboard/reservations" class="btn btn-primary">All Employees</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Find a Company</h4>
                <p class="card-text">Browse our list of companies.</p>
                <a href="/hotels" class="btn btn-primary">Our Companies</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection