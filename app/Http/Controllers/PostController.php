<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
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
        return view('posts.create', ["post" => new Post()]);
    }

    public function store(PostRequest $request)
    {
       // Validate the field
       $attr = $request->all();

        // Assign title to the slug
        $attr['slug'] = \Str::slug(request('title'));

        // Create new post
        Post::create($attr);

        session()->flash('success', 'The post was created.');
        // session()->flash('error', 'The post was created');
        return redirect('posts');
        // return back();
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        // Validate the field
        $attr = $request->all();

        $post->update($attr);

        session()->flash('success', 'The post was updated.');
        return redirect('posts');
    }
}
