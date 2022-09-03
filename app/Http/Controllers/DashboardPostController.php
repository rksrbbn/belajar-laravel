<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $post = $request->validate([
            'title' => 'required|min:5',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'required|image|file|max:1025'
        ]);

        $post['user_id'] = auth()->user()->id;
        $post['excerpt'] = substr($post['body'], 0, 20);

        $post['image']->move(public_path('img'), $post['image']->getClientOriginalName());
        $post['image'] = $post['image']->getClientOriginalName();

        Post::create($post);
        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.detail', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $new_post = $request->validate([
            'title' => 'required|min:5',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:1025'
        ]);
        if ($request->has('image')) {

            $new_post['image']->move(public_path('img'), $new_post['image']->getClientOriginalName());
            $new_post['image'] = $new_post['image']->getClientOriginalName();
        }

        $new_post['excerpt'] = substr($new_post['body'], 0, 20);


        Post::where('id', $post->id)
            ->update($new_post);
        return redirect('/dashboard/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts');
    }
}
