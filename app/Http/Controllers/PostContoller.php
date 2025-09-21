<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostContoller extends Controller
{
    public function index(Request $request): View
    {
        if ($request->has('category')) {
            $category = Category::findOrFail($request->category);
            $posts = $category->posts()->orderBy('created_at', 'desc')->paginate(2);
        } else {
            $posts = Post::orderBy('created_at', 'desc')->cursorPaginate(2);
        }

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }
}
