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

    public function create() {
     $posts = [
         [
             "title"=>"Another article 1",
             "text"=>"Some intresting text 1",
             "image"=>"image 222",
             "likes"=>55,
             "is_published"=>1,
         ],
         [
             "title"=>"Another article 2",
             "text"=>"Some intresting text 2",
             "image"=>"image 541",
             "likes"=>32,
             "is_published"=>0,
         ]
     ];

     foreach ($posts as $post) {
         Post::create($post);
     }
     dd('created');
    }

    public function update() {
        $post = Post::find(6);
        $post->update(["title" => 'updated', 'likes' => 1000]);
    }

    public function delete() {
        $post = Post::find(6);
        $post->delete();
    }
}
