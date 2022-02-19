{{-- Memberi tahu bahwa halaman ini akan menggunakan template layouts/main --}}
@extends('layouts.main')

{{-- Membuat section 'container' untuk konten utama --}}
@section('container')
    @include('partials.breadcrumb')

    {{-- search engine --}}
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="/posts" method="get">
                {{-- hidden input to include category --}}
                @if( request('category') )
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if( request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search for post.." >
                    <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    <h3 class="display-5 text-center mt-0">{{ $title }}</h3>
    @if( $posts->count() )
        @if(!request('search'))
            <div class="card mb-3 mt-0 shadow-sm">
                <img src="/img/hero.jpg" class="card-img-top mt-0" alt="hero_post_image">
                <div class="card-body text-center mt-0">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        <h5 class="card-title h2">{{ $posts[0]->title }}</h5>
                    </a>
                    <hr>
                    <p class="my-0">Author : <a href="/posts?author={{ $posts[0]->user->username }}" class="text-decoration-none badge bg-info text-dark" >{{ $posts[0]->user->name }}</a></p>
                <p class="my-0">Category : <span class="badge bg-secondary"><a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-light">{{ $posts[0]->category->name }}</a></span></p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                </div>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-info">Read more..</a>
            </div>
        @endif
    

        <div class="container">
            <div class="row">
                @if(!request('search'))
                    @foreach($posts->skip(1) as $post)
                        <div class="col-lg-4 my-2">              
                            <div class="card h-100 pb-5 shadow-sm" >
                                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-light">
                                    <div class="position-absolute bg-dark py-1 px-3 fs-5 text-center">{{ $post->category->name }}</div>
                                </a>

                                <img src="/img/programming.jpg" class="card-img-top" alt="post_image">
                                <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="my-0"><a href="/posts?author={{ $post->user->username }}" class="my-0 text-muted text-decoration-none text-dark">by : {{ $post->user->name }}</a></p>
                                <h6 class="card-subtitle badge bg-secondary"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></h6>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                </div>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary position-absolute fixed-bottom w-100">Read More..</a>
                            </div>               
                        </div>
                    @endforeach
                @else
                    @foreach($posts as $post)
                        <div class="col-lg-4 my-2">              
                            <div class="card h-100 pb-5 shadow-sm" >
                                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-light">
                                    <div class="position-absolute bg-dark py-1 px-3 fs-5 text-center">{{ $post->category->name }}</div>
                                </a>

                                <img src="/img/programming.jpg" class="card-img-top" alt="post_image">
                                <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="my-0"><a href="/posts?author={{ $post->user->username }}" class="my-0 text-muted text-decoration-none text-dark">by : {{ $post->user->name }}</a></p>
                                <h6 class="card-subtitle badge bg-secondary"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></h6>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                </div>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary position-absolute fixed-bottom w-100">Read More..</a>
                            </div>               
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    
    @else
        <p class="display-5 text-center">No post found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
   

@endsection

{{-- Membuat section untuk judul halaman --}}
@section('title_page')
    Posts
@endsection
