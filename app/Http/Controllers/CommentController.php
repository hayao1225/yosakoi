<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
     public function show(Comment $comment)
    {
        return view('comments.show')->with(['comment' => $comment]);
    }
    public function create(Post $post)
    {
        return view('comments.create')->with(['posts' => $post->get()]);
    }
    public function store(CommentRequest $request,  Comment $comment)
    {
        $input = $request['comment'];
        $comment->user_id = Auth::id();
        $comment->fill($input)->save();
        return redirect('/comments/' . $comment->id);
    }
    public function edit(Comment $comment)
    {
        return view('comments.edit')->with(['comment' => $comment]);
    }
    public function update(CommentRequest $request,  Comment $comment)
    {
        $input_comment = $request['comment'];
        $comment->user_id = Auth::id();
        $comment->fill($input_comment)->save();
        return redirect('/comments/' . $comment->id);
    }
    public function delete(Comment $comment)
    {
        $comment->delete();
        return redirect('/');
    }
}
