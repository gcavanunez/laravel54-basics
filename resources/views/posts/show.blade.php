@extends('layouts.app')

@section('content')
<a href="{{ url('posts ') }}" class="btn btn-default">Go Back</a>
<img style="width:100%;" src="/storage/cover_images/{{$single_post->cover_image}}" alt="">
<br><br>
    <h1>{{$single_post->title}}</h1>
    <div>
        {!!$single_post->body!!}
    
    </div>
    <hr>
    <small>Wrten on {{$single_post->created_at}} by  {{$single_post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $single_post->user_id)
<a href="{{ url('posts') }}/{{$single_post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=>['PostsController@destroy', $single_post->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection