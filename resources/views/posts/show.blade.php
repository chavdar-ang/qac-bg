@extends('layouts.app')

@section('title', $post->title)

@section('content')

<div class="container">
    <div class="flex middle">
        <section class="post-single">
            <div class="title">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="meta">
                <div class="date">
                    Публикувано на {{ $post->date }}
                </div>
                <div>
                    Теми:
                    @foreach($post->topics as $topic)
                    <a href="{{ route('topics.show', $topic->slug) }}" class="topic">{{ $topic->name }}</a>
                    @endforeach()
                </div>
            </div>
            <p class="body">{!! $post->body !!}</p>
        </section>
    </div>
</div>

@endsection