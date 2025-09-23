@extends('layouts.app')

@section('content')
<h2>Edit Actor</h2>

@if ($errors->any())
    <div style="color:red; margin-bottom:15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('actors.update', $actor) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div style="margin-bottom:15px;">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" value="{{ old('name', $actor->name) }}" required style="width:100%; padding:8px;">
    </div>

    <div style="margin-bottom:15px;">
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" rows="4" style="width:100%; padding:8px;">{{ old('description', $actor->description) }}</textarea>
    </div>

    <div style="margin-bottom:15px;">
        <label for="birth_date">Birth Date:</label><br>
        <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date', $actor->birth_date) }}" style="width:100%; padding:8px;">
    </div>

    <div style="margin-bottom:15px;">
        <label for="gender">Gender:</label><br>
        <select name="gender" id="gender" style="width:100%; padding:8px;">
            <option value="">-- Select Gender --</option>
            <option value="woman" {{ old('gender', $actor->gender)=='woman' ? 'selected' : '' }}>Woman</option>
            <option value="man" {{ old('gender', $actor->gender)=='man' ? 'selected' : '' }}>Man</option>
            <option value="egyéb" {{ old('gender', $actor->gender)=='egyéb' ? 'selected' : '' }}>Other</option>
        </select>
    </div>

    <div style="margin-bottom:15px;">
        <label for="image">Actor Image:</label><br>
        @if($actor->image)
            <img src="{{ asset('storage/' . $actor->image) }}" alt="{{ $actor->name }}" style="width:150px; display:block; margin-bottom:10px; border-radius:5px;">
        @endif
        <input type="file" name="image" id="image" accept="image/*">
    </div>

    <button type="submit" style="background-color:#007BFF; color:white; padding:10px 20px; border:none; border-radius:5px;">Update Actor</button>
    <a href="{{ route('actors.index') }}" style="margin-left:10px;">Cancel</a>
</form>
@endsection
