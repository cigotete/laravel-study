@extends('layout')

@section('title')
    Project: {{$project->title}}
@endsection

@section('content')
    Project: {{$project->title}}



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
