@extends('layouts.master')

@section('content')
<h1> USER GENERATOR </h1>

@foreach($user as $user_details):
    {{ $user_details }}<br>
@endforeach

@stop
