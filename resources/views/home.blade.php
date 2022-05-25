@extends('layouts.app')

@section('title','Home')

@section('content')
    <div class="container mx-auto bg-white shadow-md mt-10">
        @foreach ($genres as $genre)
            <div class="">
                <div class="p-5">
                    <h1 class="font-semibold text-2xl">{{ $genre->name }}</h1>
                </div>
                <div class="grid grid-cols-4 px-5 gap-1">
                    @for ($i = 0; $i < 4; $i++)
                        <x-movie-card :movie="$genre->movies[$i]"></x-movie-card>    
                    @endfor 
                </div>
                <a href="" class="text-sm text-gray-600 text-right ml-5 p-1">View Movies With This Category...</a>
            </div>
        @endforeach
    </div>
@endsection