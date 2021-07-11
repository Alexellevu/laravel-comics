@extends('layout.app')

@section('title', 'Comics Page')

@section('content')
    <h1>comics</h1>
@foreach($comics as $comic)
    <div class="comic">
        <img src="{{$comic['thumb']}}" alt="">
        <p> {{$comic['series']}} </p>
    </div>    
@endforeach 


@endsection

