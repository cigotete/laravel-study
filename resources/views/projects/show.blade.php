@extends('layout')

@section('title')
    Project: {{$project->title}}
@endsection

@section('content')
    Project: {{$project->title}}<br>
    @include('partials.session-status')<br>

    <a href="{{ route('projects.edit', $project) }}">Editar</a>
    <form method="POST" action="{{ route('projects.destroy', $project) }}">
        @csrf @method('DELETE')
        <button>{{ __('Delete') }}</button>
    </form>

@isset ($project)
    <ul>
        <li>id: {{ $project->id }}</li>
        <li>title: {{ $project->title }}</li>
        <li>description: {{ $project->description }}</li>
        <li>created_at: {{ $project->created_at }}</li>
        <li>updated_at: {{ $project->updated_at }}</li>
    </ul>

@endisset





@endsection
