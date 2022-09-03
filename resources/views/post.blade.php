@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        @if ($post->image !== null)
            <img src="{{ asset('img') . '/' . $post->image }}" class="w-25 h-25" />
        @endif

        <p>Category : <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>

        <p>{{ $post->body }}</p>
    </article>
    <a href="/blog">Back to Posts</a>
@endsection
