@extends('layouts.main')
@section('content')
    <a href="{{route('post.create')}}">Добавить пост</a>
    @foreach($posts as $post)
        <a href="{{route('post.show', $post->id)}}">
            {{ $post->title }}
            {{ $post->text }}
            {{ $post->likes }}
        </a>
        <br>
    @endforeach
@endsection
