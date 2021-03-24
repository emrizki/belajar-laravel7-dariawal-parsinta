<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // Validate the field
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required'
        ]);

        // Assign title to the slug
        $attr['slug'] = \Str::slug(request('title'));

        // Create new post
        Post::create($attr);
        return back();
    }
}
