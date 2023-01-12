@extends('layout')

@section('title')
    Edit Project
@endsection

@section('content')
    Edit Project
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $project->title }}"></br>
        <label for="">Url</label>
        <input type="text" name="url" value="{{ $project->url }}"></br>
        <label for="">Description</label>
        <textarea name="description">{{ $project->description }}</textarea></br>
        <button>Update project</button>
    </form>

@endsection
