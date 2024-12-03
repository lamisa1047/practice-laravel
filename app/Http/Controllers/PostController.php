<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }
    
    public function filestore(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->discription = $request->discription;
        $post->image = $request->image;
        $post->save();
        return redirect('/list');
    }
    public function showlist()
    {
        return view('list', ['posts' => Post::all()]);
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'), ['newpost' => $post]);
    }
    public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    $post->name = $request->name;
    $post->discription = $request->discription;

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $post->image = $imagePath;
    }

    $post->save();

    return redirect()->route('list')->with('success', 'Post updated successfully!');
}
public function delete($id)
{
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('list')->with('success', 'Post deleted successfully!');
}
}
