@extends('layouts.app')

@section('title',$genre->name)

@section('content')
    <div class="container mx-auto p-20">
        <div class="py-5">
            <h1 class="font-semibold text-2xl">{{ $genre->name }}</h1>
        </div>
        <div class="grid grid-cols-2 gap-10">
            @foreach ($movies as $movie)
                <div class="">
                    <x-movie-card :movie="$movie"></x-movie-card>
                </div>
            @endforeach
        </div>
        {{ $movies->links() }}
    </div>
@endsection