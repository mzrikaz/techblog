<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function index()
    {
        $latestPosts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('latestPosts'));
    }
}
