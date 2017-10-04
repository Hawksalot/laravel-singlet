@extends('layouts.app')
@section('content')
    <a class="btn btn-primary" href="{{ url('feed/create') }}">Create Feed</a>
    @foreach($feeds as $feed)
        <a href="{{ url('feed/'.$feed->id) }}">{{ $feed->name }}</a>
    @endforeach
@endsection