@extends('layouts.app')

@section('content')
<h2>{{ $actor->name }}</h2>

<p><strong>Description:</strong> {{ $actor->description }}</p>
<p><strong>Birth Date:</strong> {{ $actor->birth_date }}</p>
<p><strong>Gender:</strong> {{ $actor->gender }}</p>

@php
    $actorImage = 'actors/actor_' . $actor->id . '.jpg';
@endphp

@if(Storage::disk('public')->exists($actorImage))
    <p><strong>Image:</strong></p>
    <img src="{{ asset('storage/' . $actorImage) }}" alt="{{ $actor->name }}" style="max-width:300px; height:auto; border-radius:5px;">
@endif

<a href="{{ route('actors.edit', $actor) }}">Edit</a>
<a href="{{ route('actors.index') }}">Back to list</a>
@endsection
