@extends('layouts.app')
@section('content')
    <div class="container-fluid">{{ $post->name }}</div>
    @if($post->type === 'image')
        <img src="http://localhost:8080/ipfs/{{ $content->hash }}">
    @endif
@endsection
