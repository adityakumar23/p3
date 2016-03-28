@extends('layouts.master')

<h1> LOREM IPSUM GENERATOR </h1>
<h2> number of paragraphs </h2>

<form method = 'POST' action='/loremipsum'>
    {{csrf_field()}}
    <label> Paragraphs </label>
    <input maxlength="2" name="length" type="text">
    <br>
    <input type="submit" value="Get">

</form>
