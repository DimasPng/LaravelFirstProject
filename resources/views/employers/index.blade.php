@extends('layouts.main')
@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employers as $worker)
            <tr>
                <th scope="row">{{$worker->id}}</th>
                <td><a href="{{route('employers.show', $worker->id)}}">{{$worker->name}}</a></td>
                <td><a href="{{route('employers.show', $worker->id)}}">{{$worker->surname}}</a></td>
                <td><a href="{{route('employers.show', $worker->id)}}">{{$worker->email}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="{{route('employers.create')}}">Add employee</a>
    </div>
@endsection
