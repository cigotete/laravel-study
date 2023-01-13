@extends('layout')

@section('title')
    Edit Project
@endsection

@section('content')
    Edit Project
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        @include('projects._form', ['btnText' => __('Update')])
    </form>

@endsection
