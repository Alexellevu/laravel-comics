<!-- tutti i fumetti -->

@extends('layout.app')

@section('title', 'Comics Page')

@section('content')
    <h1>comics</h1>
@foreach($comics as $index => $comic)
   
    <div class="comic">
        <a href="{{route('comic', ['id' => $index])}}">
            <img src="{{$comic['thumb']}}" alt="">
            <p> {{$comic['series']}} </p>
        </a>
    </div>    
@endforeach 


@endsection

