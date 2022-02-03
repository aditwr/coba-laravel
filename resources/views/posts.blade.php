{{-- Memberi tahu bahwa halaman ini akan menggunakan template layouts/main --}}
@extends('layouts.main')

{{-- Membuat section 'container' untuk konten utama --}}
@section('container')
    <h3 class="display-5 text-center">Halaman Posts</h3>
@endsection

{{-- Membuat section untuk judul halaman --}}
@section('title_page')
    Posts
@endsection
