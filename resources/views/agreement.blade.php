@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="card">
            <div class="card-header bg-dark text-light">
                {{ $title_page }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Developers Agreements</h5>
                <p class="card-text">{{ $description1 }}</p>
                <a href="#" class="btn btn-success">I Agree</a>
                <a href="#" class="btn btn-danger">Reject</a>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-dark text-light">
                {{ $title_page }}
            </div>
            <div class="card-body">
                <h5 class="card-title ">Users Agreements</h5>
                <p class="card-text">{{ $description2 }}</p>
                <a href="#" class="btn btn-success">I Agree</a>
                <a href="#" class="btn btn-danger">Reject</a>
            </div>
        </div>
    </div>
@endsection