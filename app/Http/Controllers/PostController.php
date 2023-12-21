<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|max:100',
            'image' => 'image',
        ]);

        $post = new Post;
        $post->title = $valid['title'];
        $post->content = $valid['content'];
        $post->user_id = Auth::user()->id;

        if (request()->has('image')) {
            $image_URL = request()->file('image')->store('post', 'public');
            $valid['image'] = $image_URL;
            $post->image = $valid['image'];
        }

        $post->save();

        session()->flash('message', 'Post created succesfully!');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        if (!auth()->user()->is_admin) {
            if (auth()->id() !== $post->user_id) {
                abort(404);
            }
        }
        //return view('posts.show', compact('post', 'edit'));
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        request()->validate([
            'title' => 'required|max:100',
            'content' => 'required|max:255'
        ]);

        $post->title = request()->get('title');
        $post->content = request()->get('content');
        $post->save();
        
        return redirect()->route('posts.show', ['post' => $post, 'id' => $post->id] );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        if (!auth()->user()->is_admin) {
            if (auth()->id() !== $post->user_id) {
                abort(404);
            }
        }

        $post = Post::where('id', $id)->firstOrFail();
        $post->delete();
        return redirect()->route('posts.index');
    }
}
