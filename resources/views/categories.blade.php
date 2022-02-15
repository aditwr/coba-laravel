{{-- Memberi tahu bahwa halaman ini akan menggunakan template layouts/main --}}
@extends('layouts.main')

{{-- Membuat section 'container' untuk konten utama --}}
@section('container')
    <h3 class="display-5 text-center mb-3">Post Categories</h3>
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-white">
                        <div class="card bg-dark text-white">
                            <img src="/img/programming.jpg" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center p-0">
                                <h5 style="background-color: rgba(0,0,0,.5)" class="card-title flex-fill text-center p-3 display-6">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>

@endsection

