@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input value="{{$post->title}}" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Text</label>
                <input value="{{$post->text}}" name="text" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input value="{{$post->image}}" name="image" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
