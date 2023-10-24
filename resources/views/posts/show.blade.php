@extends('layouts.main')
@section('content')
    <div>
        <div>{{$post->text}}</div>
        <a href="{{route('post.index')}}">Back</a>
        <a href="{{route('post.edit', $post->id)}}">Edit</a>
        <a href=>Edit</a>
        <div>
            <form action="{{route('post.delete', $post->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </div>
    </div>

@endsection
