<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::All();

        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $data = request()->validate([
            'title'=>'string',
            'text'=>'string',
            'image'=>'string'
        ]);
        Post::created($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post) {

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post) {
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string'
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function delete() {
        $post = Post::find(2);
        $post->delete();
    }

    public function restore() {
        $post = Post::withTrashed()->find(2);
        $post->restore();
    }

    public function firstOrCreate() {
        $post = [
            "title"=>"Another article 2",
            "text"=>"Some intresting text 2",
            "image"=>"image 541",
            "likes"=>32,
            "is_published"=>0,
        ];

       Post::firstOrCreate([
           "title"=>"Another article 5"
        ], [
           "title"=>"Another article 5",
           "text"=>"Some intresting text 2",
           "image"=>"image 541",
           "likes"=>32,
           "is_published"=>0,
       ]);

    }

    public function updateOrCreate() {
     Post::updateOrCreate(
         ['text'=>'Update4543'], [
             'title'=>'Update66666',
             'text'=>'Update6666',
             'image' => 'default_image.jpg',
             "likes"=>32,

           "is_published"=>0,
         ]
     );
    }

}
