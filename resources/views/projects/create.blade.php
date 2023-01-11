@extends('layout')

@section('title')
    Create Project
@endsection

@section('content')
    Create Project
    <form action="">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title"></br>
        <label for="">Url</label>
        <input type="text" name="url"></br>
        <label for="">Description</label>
        <textarea name="description"></textarea></br>
        <button>Create project</button>
    </form>

@endsection
