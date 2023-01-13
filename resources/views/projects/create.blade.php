@extends('layout')

@section('title')
    Create Project
@endsection

@section('content')
    Create Project<br>
    @include('partials.session-status')<br>
    @include('partials.validation-errors')<br>

    <form method="POST" action="{{ route('projects.store') }}">
        @include('projects._form', ['btnText' => __('Save')])
    </form>

@endsection
