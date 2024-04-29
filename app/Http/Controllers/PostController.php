<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all()->load(['user']);
        return view('policies.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return  view('policies.show')->with('post', $post);
    }

    // public function destroy(Post $post){
    //     $post->delete();
    // }
}
