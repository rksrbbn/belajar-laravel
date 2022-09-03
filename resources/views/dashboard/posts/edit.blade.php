@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>

    <form action="/dashboard/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" value="{{$post->title}}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category">
                @foreach ($categories as $category)
                @if ($post->category_id == $category->id)
                    
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                    
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <img src="{{asset('img').'/'.$post->image}}" class="d-block w-25 h-25">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3" required>{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
    
@endsection
