<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function store(PostRequest $request) {
        $post = Post::create($request->only('title', 'description'));

        return response($post, Response::HTTP_CREATED);
    }
}
