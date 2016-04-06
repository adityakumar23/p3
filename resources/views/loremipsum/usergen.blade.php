@extends('layouts.master')

@section('content')
    <h1> USER GENERATOR </h1>
    <a href='/'> Home </a> <br>
    <form method = 'POST' action='/usergenerator'>
        {{csrf_field()}}
        <label>Number of Users (max 14) </label>
        <input maxlength="2" name="users" type="text">
        <br>
        <input type="submit" value="Get"><br>

    </form>

    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach

@stop
