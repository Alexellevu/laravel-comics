@extends('layout.app')

@section('title', 'Home page laravel comics')

@section('content')
    <h1>home page</h1>

     @foreach($comics as $comic)
        <h2> {{$comic['title']}} </h2>
    @endforeach 
@endsection

