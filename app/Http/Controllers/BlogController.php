<?php

namespace Blog\Http\Controllers;

use Blog\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<', date('Y-m-d'))->paginate(3);
        return view('welcome')->withPosts($posts);
    }
}
