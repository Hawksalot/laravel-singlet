@extends('layouts.app')
@section('content')
    <form class="form" method="post" action="{{ url('create/feed') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="privacy">Type</label>
            <select class="form-control" id="privacy" name="privacy">
                <option value="0">Public</option>
                <option value="1">Private</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Create Feed</button>
    </form>
    @foreach($feeds as $feed)
        <a href="{{ url('feed/'.$feed->id) }}">{{ $feed->name }}</a>
    @endforeach
@endsection