@extends('layouts.master')

@section('title', ' :: Bookmark Details')

@section('content')
<h3>{{ $bookmark->text }}</h3>
The link is: {{ $bookmark->url }}
@stop
