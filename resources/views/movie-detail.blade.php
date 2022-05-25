@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container mx-auto bg-white shadow-md mt-10 p-5">
        <div class="grid grid-cols-2 gap-5">
            <div class="flex">  
                <img src="{{ asset('assets/') }}/{{ $movie->photo }}" alt="" class="object-none">
                <div class="ml-2">
                    <h1 class="text-3xl font-medium">{{ $movie->title }}</h1>
                    <h2 class="text-sm text-gray-500">rating: {{ $movie->rating }}</h2>
                    <p class="text-justify text-gray-600">{{ $movie->description }}</p>
                    <h1 class="mt-5 text-lg">Kategori:
                        <a href="{{ route('genre', $genre) }}" class="text-blue-500 underline hover:text-purple-500">
                            {{ $genre->name }}
                        </a>
                    </h1>
                </div>
            </div>
            <div class="ml-10">
                <h1 class="font-bold text-2xl text-gray-600">Episode</h1>
                <table class="">
                    <th class="border-2 px-5">
                        Episode
                    </th>
                    <th class="border-2 px-10 w-full">
                        Judul
                    </th>
                    @foreach ($episodes as $episode)
                        <tr>
                            <td class="border-2 px-5">{{ $episode->episode }}</td>
                            <td class="border-2 px-5">{{ $episode->title }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $episodes->links() }}
            </div>
        </div>
    </div>
@endsection