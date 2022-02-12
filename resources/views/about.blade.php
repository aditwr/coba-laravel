@extends('layouts.main')
@section('container')
    <h1 class="display-5 text-center mb-3">Halaman About</h1>

    <div class="container">
        <div class="card">
            <div class="card-header bg-dark text-light">
                {{ $title }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Identity</h5>
                <h3>Nama : {{ $name }}</h3>
                <p>Email : {{ $email }}</p>
                <h4>Job : {{ $job }}</h4>
            </div>
        </div>
    </div>
@endsection

@section('title_page')
    About
@endsection