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
        $user = DB::table('posts')
            ->join('users', 'posts.id', '=', 'users.id')
            ->select('users.name')
            ->get();
        $posts = Post::all();
        return view('policies.index', compact('posts'));
    }
}
