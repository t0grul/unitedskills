<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   /* public function show($post) {

        Post::findOrFail($post);
        return view('post', compact('post'));
    }*/

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', compact('post'));
    }
}
