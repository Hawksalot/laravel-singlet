@extends('layouts.app')
@section('content')
    <div class="jumbotron-fluid">{{ $feed->name }}</div>
    <a href="{{ url('post/create', compact('feed')) }}">Create Post</a>
    @foreach($posts as $post)
        @if($post->type === 'image')
            <?php $image = App\Image::where('postID', $post->id); ?>
            <img src="http://localhost:8080/ipfs/{{ $image->hash }}">
        @endif
    @endforeach
@endsection