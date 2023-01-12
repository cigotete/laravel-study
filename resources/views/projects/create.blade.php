@extends('layout')

@section('title')
    Create Project
@endsection

@section('content')
    Create Project
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{ old('title') }}"></br>
        <label for="">Url</label>
        <input type="text" name="url" value="{{ old('url') }}"></br>
        <label for="">Description</label>
        <textarea name="description">{{ old('description') }}</textarea></br>
        <button>Create project</button>
    </form>

@endsection
