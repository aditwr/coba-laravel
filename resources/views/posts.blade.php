{{-- Memberi tahu bahwa halaman ini akan menggunakan template layouts/main --}}
@extends('layouts.main')

{{-- Membuat section 'container' untuk konten utama --}}
@section('container')
    <h3 class="display-5 text-center">Halaman Posts</h3>
    
    @foreach ($posts as $post)
        <div class="container bg-light">
            <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none text-black">
                <h3 class="display-5 mb-0">{{ $post["title"] }}</h3>
            </a>
            <p class="mt-0">written by : {{ $post['author'] }}</p>
            <hr>
            <p class="">{{ $post['body'] }}</p>
        </div>
    @endforeach

@endsection

{{-- Membuat section untuk judul halaman --}}
@section('title_page')
    Posts
@endsection
