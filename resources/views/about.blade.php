@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    <h3>Nama : {{ $name }}</h3>
    <p>Email : {{ $email }}</p>
    <h4>Job : {{ $job }}</h4>
@endsection

@section('title_page')
    About
@endsection