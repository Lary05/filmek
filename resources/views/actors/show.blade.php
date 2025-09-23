@extends('layouts.app')

@section('content')
<h2>{{ $actor->name }}</h2>

<p><strong>Description:</strong> {{ $actor->description }}</p>
<p><strong>Birth Date:</strong> {{ $actor->birth_date }}</p>
<p><strong>Gender:</strong> {{ $actor->gender }}</p>
@if($actor->image)
    <p><strong>Image:</strong></p>
    <img src="{{ asset('storage/' . $actor->image) }}" alt="Actor Image" width="200">
@endif

<a href="{{ route('actors.edit', $actor) }}">Edit</a>
<a href="{{ route('actors.index') }}">Back to list</a>
@endsection
