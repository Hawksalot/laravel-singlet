@extends('layouts.app')
@section('content')
    <div class="container-fluid">{{ $post->name }}</div>
        @if($post->type === 'image')
            <img src="http://localhost:8080/ipfs/{{ $content->hash }}">
        @elseif($post->type === 'text')
            <p>{{ \PhpIpfs\Ipfs::cat($content->hash) }}</p>
        @elseif($post->type === 'video')
            <video>
                <source src="http://localhost:8080/ipfs/{{ $content->hash }}" type="video/webm">
                <source src="http://localhost:8080/ipfs/{{ $content->hash }}" type="video/mp4">
                Video Format Not Supported
            </video>
        @else
            <p>Error: Post Type Not Recognized</p>
        @endif
@endsection
