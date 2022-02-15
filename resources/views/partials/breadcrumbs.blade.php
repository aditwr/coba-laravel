{{-- breadcrumb [3 values] --}}
<nav aria-label="breadcrumb my-0">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/posts">{{ $breadcrumb[0] }}</a></li>
        <li class="breadcrumb-item"><a href="/authors/{{ $breadcrumb[1] }}">{{ $breadcrumb[1] }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb[2] }}</li>
    </ol>
</nav>