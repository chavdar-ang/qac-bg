@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    <div>
        <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
        </li>
        @endforeach
        </ul>
    </div>
    <p>This is my body content.</p>
@endsection