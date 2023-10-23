@extends('layouts.main')
@section('content')
    @foreach($posts as $post)
        <div>
            {{ $post->title }}
            {{ $post->text }}
            {{ $post->likes }}
        </div>
        <br>
    @endforeach
@endsection
