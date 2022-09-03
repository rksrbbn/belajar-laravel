@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Category : {{$category}}</h1>

@foreach ($posts as $post)
<article class="mb-5">

    <h2>
        <a href="/posts/{{$post->id}}">
            {{$post->title}}
        </a>
    </h2>
    <h5>By <a href="/authors/{{$post->user->id}}">{{$post->user->name}}</a> in <a href="/categories/{{ $post->category->id }}"
        class="text-decoration-none">{{ $post->category->name }}</a></h5>
    <p>{{$post->excerpt}}</p>

</article>

@endforeach
    
@endsection
