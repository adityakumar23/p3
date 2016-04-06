@extends('layouts.master')

@section('content')
    <h1> LOREM IPSUM GENERATOR </h1>

    <a href='/'> Home </a> <br>
    <form method = 'POST' action='/loremipsum'>
        {{csrf_field()}}
        <label> Paragraphs (max 23) </label>
        <input maxlength="2" name="length" type="text">
        <br>
        <input type="submit" value="Get"> <br>

    </form> <br>

    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach

@stop
