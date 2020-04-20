<!-- resources/views/dashboard/reservationCreate.blade.php -->
@extends('index')
@section('title', 'Create employee')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2>{{ $companyInfo->name }} - <small class="text-muted">{{ $companyInfo->location }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Add an Employee</p>
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input class="form-control" name="position" placeholder="Position">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="firs_tname">Firstname</label>
                            <input class="form-control" name="first_name" placeholder="First name">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="last_name">Lastname</label>
                            <input class="form-control" name="last_name" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="hire_date">Hire Date</label>
                            <input type="date" class="form-control" name="hire_date" placeholder="03/23/2020">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection