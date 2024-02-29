<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(PostRequest $request,  Post $post)
    {
        $input = $request['post'];
        $post->user_id = Auth::id();
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->user_id = Auth::id();
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}