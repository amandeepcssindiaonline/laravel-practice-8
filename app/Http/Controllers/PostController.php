<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return view('posts.index', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => Str::of($request->title)->slug('-'),
            'body' => $request->body
        ]);

        return back()->with('status', 'Your post saved successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('status', 'Your post deleted successfully');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
}
