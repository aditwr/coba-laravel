@extends('layouts.main')

@section('container')
    <div class="container">
        <h3 class="display-5">Ini adalah konten Halaman Home</h3>
        <h3 class="display-3">{{ time() }}</h3>

    </div>
    <div class="container mt-3">
        {{-- Blade If Statement --}}
        @if($number == 1)
            <p class="display-3 text-center">
                The Number value is {{ $number.' (ONE)' }} 
            </p>
        @elseif($number == 2)
            <p class="display-3 text-center">
                The Number value is {{ $number. ' (TWO)' }}
            </p>
        @else
            <p class="display-3 text-center">
                The Number value is't 1 or 2
            </p>
        @endif
    </div>
@endsection

@section('title_page')
    Home
@endsection

