@extends('layouts.master')

@section('title', ' :: Home')

@section('content')
<h3>This is the homepage</h3>
<p>We are going to check ajax requests...</p>
<p>
<input type="text" id="password">
<button id="press">Check Ajax</button>
</p>
<p id="info"></p>
@stop

@section('js')
<script src={{ asset('js/test.js') }}></script>
@stop
