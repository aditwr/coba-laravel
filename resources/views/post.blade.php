@extends('layouts.main')

@section('container')
    <div class="container bg-light">
        <h2 class="display-5">{{ $post->title }}</h2>
        <p class="mt-0">created at : {{ $post->created_at }}</p>
        <hr>
        {!! $post->body !!}
    </div>
    <div class="container text-center mt-3">
        <a href="/posts" class="btn btn-primary text-decoration-none text-light">Back to Blog page</a>
    </div>
@endsection