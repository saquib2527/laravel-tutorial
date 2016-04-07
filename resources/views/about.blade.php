@extends('layouts.master')

@section('title', ' :: About')

@section('content')
    <h3>This is the about page</h3>
    @if($title == 'About Page')
        {{ 'this is truly the about page!' }}
    @else
        {{ 'false alarm, not the about page' }}
    @endif
@stop
