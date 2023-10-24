@extends('layouts.main')
@section('content')
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->name}}</td>
            <td>{{$employee->surname}}</td>
            <td>{{$employee->email}}</td>
        </tr>
        </tbody>
    </table>
    <div>
        <a href="{{route('employers.edit', $employee->id)}}" class="btn-primary btn">Edit</a>
        <form action="{{route('employers.destroy', $employee->id)}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
        <a class="btn btn-secondary" href="{{route('employers.index')}}">Back</a>
    </div>
@endsection
