<?php

namespace App\Http\Controllers;

use App\Post;
use App\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('topics')->get();
        $topics = Topic::all();

        return view('blog', compact('posts', 'topics'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::with('topics')->where('slug', $slug)->first();
        $topics = Topic::all();
        return view('posts.show', compact('post', 'topics'));
    }
}
