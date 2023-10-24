@extends('layouts.main')
@section('content')
    <div>
        <div>{{$post->text}}</div>
        <a href="{{route('post.index')}}">Back</a>
    </div>

@endsection
