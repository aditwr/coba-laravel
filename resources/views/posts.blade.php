{{-- Memberi tahu bahwa halaman ini akan menggunakan template layouts/main --}}
@extends('layouts.main')

{{-- Membuat section 'container' untuk konten utama --}}
@section('container')
    <h3 class="display-5 text-center my-5">{{ $title }}</h3>
    
    @foreach ($posts as $post)
        <div class="container bg-light mb-3 p-1">
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-black">
                <h3 class="display-5 mb-0">{{ $post->title }}</h3>
            </a>
            <p class="my-0">Author : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none badge bg-info text-dark" >{{ $post->user->name }}</a></p>
            <p class="my-0">Category : <span class="badge bg-secondary"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a></span></p>
            <hr>
            <p class="">{{ $post->excerpt }}...</p>
            <a href="/posts/{{ $post->slug }}" class="btn btn-info">Read more</a>
        </div>
    @endforeach

@endsection

{{-- Membuat section untuk judul halaman --}}
@section('title_page')
    Posts
@endsection
