@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$single_post->title}}</h1>
    <div>
        {!!$single_post->body!!}
    
    </div>
    <hr>
    <small>Wrten on {{$single_post->created_at}}</small>

@endsection