@extends('layouts.master')

@section('content')
    <h1> LOREM IPSUM GENERATOR </h1>

    <a href='/loremipsum'> Generate more text</a>
    <a href='/'> Home </a> <br>
    @foreach($para as $paratext)
        {{ $paratext }}<br>
    @endforeach

@stop
