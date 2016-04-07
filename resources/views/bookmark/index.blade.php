@extends('layouts.master')

@section('title', ' :: List of Bookmarks')

@section('content')
<h3>List of Bookmarks</h3>
@if(session()->has('info'))
    <b>{{ session('info') }}</b>
@endif
<table>
    <thead><tr>
<th>Text</th>
<th>Url</th>
<th>Details</th>
<th>Update</th>
<th>Delete</th>
</tr></thead>
    <tbody>
    @foreach($bookmarks as $bookmark)
    <tr>
        <td>{{ $bookmark->text }}</td>
        <td><a href="{{ $bookmark->url }}" target="_blank">{{ $bookmark->url }}</a></td>
        <td><a href="{{ url('/').'/bookmark/'.$bookmark->id }}">Details</a></td>
        <td><a href="{{ url('/').'/bookmark/'.$bookmark->id.'/edit' }}">Update</a></td>
        <td>
            <form action="{{ url('/').'/bookmark/'.$bookmark->id }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="DELETE" name="_method">
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop
