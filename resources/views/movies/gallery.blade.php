@extends('layouts.app')

@section('content')
<h2>Movie Gallery</h2>

<div style="display: flex; flex-wrap: wrap; gap: 20px;">
    @foreach($movies as $movie)
        <div style="flex: 1 1 200px; background-color: #fff; padding: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center;">
            
            @if($movie->cover_image)
                <a href="{{ route('movies.show', $movie) }}">
                    <img src="{{ asset('storage/' . $movie->cover_image) }}" alt="{{ $movie->title }}" style="width:100%; height: auto; border-radius: 5px;">
                </a>
            @else
                <div style="width:100%; height: 150px; background-color: #ccc; display:flex; align-items:center; justify-content:center; border-radius:5px;">
                    No Image
                </div>
            @endif

            <h3 style="margin:10px 0 5px 0;">
                <a href="{{ route('movies.show', $movie) }}" style="text-decoration:none; color:#333;">{{ $movie->title }}</a>
            </h3>
            <p style="font-size: 14px; color:#666;">{{ $movie->director->name }}</p>
            <p style="font-size: 14px; color:#666;">{{ $movie->category->name }}</p>

        </div>
    @endforeach
</div>
@endsection
