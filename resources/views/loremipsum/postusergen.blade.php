@extends('layouts.master')

@section('content')
    <h1> USER GENERATOR </h1>
    <a href='/usergenerator'> Generate more users </a> <br>
    <a href='/'> home </a> <br>
    <ol>
        @foreach($user as $user_details)
            {{ $user_details }}<br>
        @endforeach
    </ol>

@stop
