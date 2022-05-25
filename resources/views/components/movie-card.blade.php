@props(['movie'])

@php
    $photo = $movie->photo;
    $title = $movie->title;
@endphp

<div class="border-2">
    <img src="{{ asset('assets/') }}/{{ $photo }}" alt="" class="w-full">
    <h1 class="text-center font-medium py-2 text-lg">{{ $title }}</h1>
    <a href="">
        <div class="bg-black text-white w-full text-center py-1 hover:scale-105 border-2">
            Lihat Film
        </div>
    </a>
</div>