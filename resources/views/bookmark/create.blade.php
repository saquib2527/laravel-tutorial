@extends('layouts.master')

@section('title', ' :: Create Bookmark')

@section('content')
<h3>Create a Bookmark</h3>
<form action="{{ url('/').'/bookmark/store' }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="text">Text:</label>
    <input type="text" name="text" id="text">
    <label for="url">Url: </label>
    <input type="text" name="url" id="url">
    <input type="submit" value="add">
</form>
@stop
