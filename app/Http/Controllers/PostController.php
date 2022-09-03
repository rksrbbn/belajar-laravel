<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::with(['user', 'category']);

        // if(request('search')) {
        //     $posts->where('title', 'like', '%'. request('search') . '%')
        //             ->orWhere('body', 'like', '%'. request('search'). '%');
        // }

        return view('posts', [
            'title' => 'All Posts',
            'posts' => Post::with(['user', 'category'])->filter()->paginate(3)
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post', [
            'title' => $post->title,
            'post' => $post
        ]);
    }
}
