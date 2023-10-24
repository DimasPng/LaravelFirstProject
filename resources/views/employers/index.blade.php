@extends('layouts.main')
@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employers as $worker)
            <tr>
                <th scope="row">{{$worker->id}}</th>
                <td>{{$worker->name}}</td>
                <td>{{$worker->surname}}</td>
                <td>{{$worker->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
