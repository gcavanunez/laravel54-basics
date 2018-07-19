@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <h1>{{$title}}<h1>
        <p>This is the laravel application from the "Laravel from scraft" youtube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-suscess btn-lg" href="#" role="button">Register</a></p>
    </div>
@endsection