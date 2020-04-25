@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
    <div class="blog">
        @foreach($posts as $post)
        <li class="post-item">
            <a href="{{ route('posts.show', $post->slug) }}">
                <img src="https://picsum.photos/400/250?i={{ $post->id }}" alt="{{ $post->title }}">
            </a>
            <h3>
                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
            </h3>
        </li>
        @endforeach
    </div>
</div>

@endsection