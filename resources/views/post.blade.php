@extends('layouts.main')

@section('container')
    <div class="container bg-light">
        <h2 class="display-5">{{ $post['title'] }}</h2>
        <p class="mt-0">written by : {{ $post['author'] }}</p>
        <hr>
        <p>{{ $post['body'] }}</p>
    </div>
    <div class="container text-center">
        <a href="/posts" class="btn btn-primary text-decoration-none text-light">Back to Blog page</a>
    </div>
@endsection