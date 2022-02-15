{{-- Memberi tahu bahwa halaman ini akan menggunakan template layouts/main --}}
@extends('layouts.main')

{{-- Membuat section 'container' untuk konten utama --}}
@section('container')
    @include('partials.breadcrumb')
    <h3 class="display-5 text-center mt-0">{{ $title }}</h3>
    @if( $posts->count() )
        <div class="card mb-3 mt-0">
            <img src="/img/hero.jpg" class="card-img-top mt-0" alt="hero_post_image">
            <div class="card-body text-center mt-0">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h5 class="card-title h2">{{ $posts[0]->title }}</h5>
                </a>
                <hr>
                <p class="my-0">Author : <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none badge bg-info text-dark" >{{ $posts[0]->user->name }}</a></p>
            <p class="my-0">Category : <span class="badge bg-secondary"><a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-light">{{ $posts[0]->category->name }}</a></span></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </div>
            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-info">Read more..</a>
        </div>
    @else
        <p class="display-5 text-center">No post found.</p>
    @endif


    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-lg-4 my-2">              
                    <div class="card h-100 pb-5" >
                        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-light">
                            <div class="position-absolute bg-dark py-1 px-3 fs-5 text-center">{{ $post->category->name }}</div>
                        </a>

                        <img src="/img/programming.jpg" class="card-img-top" alt="post_image">
                        <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="my-0"><a href="/authors/{{ $post->user->username }}" class="my-0 text-muted text-decoration-none text-dark">by : {{ $post->user->name }}</a></p>
                        <h6 class="card-subtitle badge bg-secondary"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></h6>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        </div>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary position-absolute fixed-bottom w-100">Read More..</a>
                    </div>               
                </div>
            @endforeach
        </div>
    </div>
    
   

@endsection

{{-- Membuat section untuk judul halaman --}}
@section('title_page')
    Posts
@endsection
