{{-- Memberi tahu bahwa halaman ini akan menggunakan template layouts/main --}}
@extends('layouts.main')

{{-- Membuat section 'container' untuk konten utama --}}
@section('container')
    <h3 class="display-5 text-center">Post Categories</h3>
    <hr>
    
    @foreach ($categories as $category)
        <div class="container bg-light">
            <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-black">
                <h3 class="display-5 mb-0">{{ $category->name }}</h3>
            </a>
        </div>
    @endforeach

@endsection

