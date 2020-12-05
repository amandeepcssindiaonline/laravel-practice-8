<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);

        return view('posts.index', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
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
}
