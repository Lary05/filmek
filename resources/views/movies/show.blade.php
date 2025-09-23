@extends('layouts.app')

@section('content')
<h2>{{ $movie->title }}</h2>

<!-- Borítókép -->
@if($movie->cover_image)
    <div style="margin-bottom: 20px;">
        <img src="{{ asset('storage/' . $movie->cover_image) }}" alt="Cover Image" style="max-width:300px; border-radius:8px;">
    </div>
@endif

<!-- Film adatok -->
<p><strong>Description:</strong> {{ $movie->description ?? 'No description available.' }}</p>
<p><strong>Director:</strong> {{ $movie->director->name }}</p>
<p><strong>Category:</strong> {{ $movie->category->name }}</p>

<!-- Színészek -->
<p><strong>Actors:</strong>
    @if($movie->actors->count())
        @foreach($movie->actors as $actor)
            <a href="{{ route('actors.show', $actor) }}">{{ $actor->name }}</a>{{ !$loop->last ? ', ' : '' }}
        @endforeach
    @else
        No actors assigned.
    @endif
</p>

<!-- Akciógombok -->
<a href="{{ route('movies.edit', $movie) }}">
    <button>Edit</button>
</a>

<form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" style="background-color:#dc3545;">Delete</button>
</form>

<a href="{{ route('movies.index') }}" style="margin-left:10px;">Back to list</a>
@endsection
