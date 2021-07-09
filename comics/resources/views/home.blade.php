@extends('layout.app')

@section('title', 'Home page laravel comics')

@section('content')
    <h1>home page</h1>
@foreach($comics as $comic)
    <div class="comic">
        <img src="{{$comic['thumb']}}" alt="">
        <p> {{$comic['title']}} </p>
    </div>    
@endforeach 


@endsection

