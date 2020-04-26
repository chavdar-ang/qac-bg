@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<div class="container">
    <div class="blog">
        <div class="posts">
            @foreach($posts as $post)
            <li class="item">
                <a href="{{ route('posts.show', $post->slug) }}" class="feature" style="background-image: url('https://picsum.photos/400/250?i={{ $post->id }}')" alt="{{ $post->title }}">
                </a>
                <div class="meta">Публикувана на {{ $post->date }}</div>
                <h3 class="title">
                    <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                </h3>
                <div class="excerpt">{{ $post->excerpt }}</div>
                <div class="topics">
                    @foreach($post->topics as $topic)
                    <a href="{{ route('topics.show', $topic->slug) }}" class="topic">{{ $topic->name }}</a>
                    @endforeach
                </div>
            </li>
            @endforeach
        </div>
        <div class="sidebar">
            <div class="banner">
                banner
            </div>
            <div class="topics">
            @foreach($topics as $item)
            <a href="{{ route('topics.show', $topic->slug) }}">{{ $item->name }}</a>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection