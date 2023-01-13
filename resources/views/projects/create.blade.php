@extends('layout')

@section('title')
    Create Project
@endsection

@section('content')
    Create Project
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('projects.store') }}">
        @include('projects._form', ['btnText' => __('Save')])
    </form>

@endsection
