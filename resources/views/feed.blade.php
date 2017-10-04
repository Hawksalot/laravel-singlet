@extends('layouts.app')
@section('content')
    <div>{{ $feed->name }}</div>
    <form class="form-horizontal" method="post" action="{{ url('create/'.$feed->id.'/post') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="type">Post Type</label>
            <select class="form-control" id="type" name="type">
                <option value="image">Image</option>
                <option value="text">Text</option>
                <option value="video">Video</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hash">IPFS Link</label>
            <input class="form-control" type="text" value="QmV7ydRDWq2jEVHxi4UM86tse2r94y1aK4DdTw2PgZj8kY" id="hash" name="hash">
        </div>
        <button class="btn btn-primary" type="submit">Create Post</button>
    </form>
    @foreach($posts as $post)
        @if($post->type === 'image')
            <?php $image = App\Image::where('postID', $post->id); ?>
            <img src="http://localhost:8080/ipfs/{{ $image->hash }}">
        @endif
    @endforeach
@endsection