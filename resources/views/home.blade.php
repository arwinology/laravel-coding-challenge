<!-- resources/views/home.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Home" -->
@section('title', 'Home')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1600x900/?nature')">
    <div class="container">
        <h1 class="display-3">Employee Manager.</h1>
        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
                   
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Convenient</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Simple</h5>
                    <p class="card-text">Fugiat molestiae ipsa delectus iusto vel quod.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy to use</h5>
                    <p class="card-text">Numquam in quia natus magnam ducimus quas molestias velit vero maiores</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection