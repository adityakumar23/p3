@extends('layouts.master')

@section('content')
<h1> LOREM IPSUM GENERATOR </h1>

@foreach($para as $paratext):
    {{ $paratext }}<br>
@endforeach

@stop
