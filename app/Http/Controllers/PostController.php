<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|max:225|string',
            'content' => 'required|max:225|string',
            'category' => 'required|max:225|string',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $extension;
        Storage::put('public/posts/' . $file_name, fopen($file, 'r+'));

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->image = $file_name;
        $post->save();

        return back()->with(['success' => 'Post uploaded']);
    }
}
