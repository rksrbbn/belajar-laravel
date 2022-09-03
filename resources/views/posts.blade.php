@extends('layouts.main')

@section('container')

    <h2 class="text-center mb-3">{{ $title }}</h2>

    <form action="/blog" class="mb-5">
        {{-- Bootstrap button addons --}}
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
            <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
        </div>
    </form>

    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <article class="mb-5 border-bottom pb-4">

                <h2>
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h2>

                @if ($post->image !== null)
                    
                <img src="{{asset('img').'/'.$post->image}}" class="w-25 h-25" />
                
                @endif

                <h5>By
                    <a href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a> in <a
                        href="/categories/{{ $post->category->id }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                    <small>{{ $post->created_at->diffForHumans() }}</small>
                </h5>
                <p>{{ $post->excerpt }}</p>

                <a href="/posts/{{ $post->id }}">Read more...</a>
            </article>
        @endforeach
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    {{ $posts->links() }}
    
@endsection
