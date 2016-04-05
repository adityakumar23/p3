@extends('layouts.master')

@section('content')
<h1> USER GENERATOR </h1>
<h2> number of paragraphs </h2>

<form method = 'POST' action='/usergenerator'>
    {{csrf_field()}}
    <label> Users </label>
    <input maxlength="2" name="users" type="text">
    <br>
    <input type="submit" value="Get">

</form>

@foreach($errors->all() as $error)
    {{ $error }}<br>
@endforeach

@stop
