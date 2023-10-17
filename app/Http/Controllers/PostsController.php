<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::where('likes', 11)->first();
//        foreach ($posts as $post) {
//            dump($post->title);
//        }
        dd($posts);
    }
}
