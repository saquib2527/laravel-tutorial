@extends('layouts.master')

@section('title', ' :: Edit Bookmark')

@section('content')
<h3>Editing {{ $bookmark->text }}</h3>
<form action="{{ url('/').'/bookmark/'.$bookmark->id }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    <label for="text">Text:</label>
    <input type="text" id="text" name="text" value="{{ $bookmark->text }}">
    <label for="url">Url: </label>
    <input type="text" id="url" name="url" value="{{ $bookmark->url }}">
    <input type="submit" value="update">
</form>
@stop
