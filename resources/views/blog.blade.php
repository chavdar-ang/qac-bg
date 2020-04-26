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
            <div class="meta">{{ Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</div>
            <ul class="topics">
                @foreach($post->topics as $topic)
                <li><a href="{{ route('topics.show', $topic->slug) }}">{{ $topic->name }}</a></li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </div>
</div>

@endsection