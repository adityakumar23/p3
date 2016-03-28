@extends('layouts.master')

<h1> USER GENERATOR </h1>
<h2> number of paragraphs </h2>

<form method = 'POST' action='/usergenerator'>
    {{csrf_field()}}
    <label> Users </label>
    <input maxlength="2" name="users" type="text">
    <br>
    <input name="birthdate" type="checkbox"> <label> Birthdate </label> <br>
    <input name="profile" type="checkbox"> <label> Profile </label>
    <input type="submit" value="Get">

</form>
