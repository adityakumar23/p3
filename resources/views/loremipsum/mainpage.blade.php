@extends('layouts.master')

@section('content')
    <h1> Developer's Best Friend </h1> <br>
    <h2> Lorem Ipsum Generator </h2> <br>
    <p> In publishing and graphic design, lorem ipsum is a placeholder text
        commonly used to demonstrate the graphic elements of a document or
        visual presentation. By replacing the distraction of meaningful content
         with filler text of scrambled Latin it allows viewers to focus on
         graphical elements such as font, typography, and layout.</p>

    <p> Create random filler text </p>
    <a href='/loremipsum'> Generate some text... </a> <br>

    <h2> Random user generator </h2>
    <p> Create random user data. </p>

    <a href='/usergenerator'> Generate users... </a>
@stop
