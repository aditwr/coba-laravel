@extends('layouts.main')

@section('container')
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/hero.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $posts[0]->title }}</h5>
                    <p>{{ $posts[0]->excerpt }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/hero.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $posts[1]->title }}</h5>
                    <p>{{ $posts[1]->excerpt }}</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        {{-- nav for hero --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/categories">Categories</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
        </nav>

        <div class="row my-3">
            <div class="col-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas quaerat harum ratione obcaecati dignissimos. Consequatur nemo ipsa, quam obcaecati quaerat labore modi nulla animi eos? Odio reiciendis sit fuga at delectus, voluptatem aperiam qui pariatur dolor unde nostrum doloribus quas esse laudantium! Distinctio eius illum recusandae? Quis ullam suscipit numquam illum ducimus culpa esse natus quidem asperiores fugiat ipsum ad dolorum, doloremque tempore harum, perspiciatis maiores dolorem alias totam? Iste, quibusdam temporibus porro veniam maxime eveniet qui praesentium est voluptatum ex ut quaerat, assumenda sed, culpa iure quis illo quia maiores pariatur voluptate. Debitis, assumenda atque. Illo nihil saepe nemo.</div>
            <div class="col-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae excepturi quisquam reprehenderit sed temporibus sunt, voluptatum cumque sit doloribus doloremque veniam, natus, id deserunt tempore vero corrupti laboriosam eaque! Accusantium quibusdam nisi quaerat nam omnis consequatur, vitae laudantium, voluptatibus beatae soluta similique quasi voluptas perspiciatis explicabo iste magni! Explicabo, adipisci natus. Quia doloribus, dolores magni neque est molestiae exercitationem perferendis consequuntur id. Non ducimus sint sit omnis nemo, porro magnam qui iusto perferendis, numquam odio explicabo eum distinctio aliquid reiciendis repellendus commodi nostrum, molestias modi?</div>
        </div>

    </div>
@endsection

@section('title_page')
    Home
@endsection

