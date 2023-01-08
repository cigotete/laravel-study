@extends('layout')

@section('title')
Contact
@endsection

@section('content')
Contact
@if($errors->any())
    {{ var_dump($errors->all()) }}
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif
    <form action="{{ route('contact') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name..." value="{{ old('name') }}"><br>
    <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
    <input type="text" name="subject" placeholder="Subject..." value="Esto es una prueba"><br>
    <textarea name="content" placeholder="Mensaje...">Este texto es dummy text</textarea><br>
    <button>Send</button><br>
</form>
@endsection
