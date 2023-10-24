@extends('layouts.main')
@section('content')
    <form action="{{route('employers.update', $employee->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input value="{{$employee->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Surname</label>
            <input value="{{$employee->surname}}" name="surname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your surname">
        </div>
        <div class="form-group mb-2">
            <label for="exampleInputPassword1">Email</label>
            <input value="{{$employee->email}}" name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your email">
        </div>
        <button type="submit" class="btn btn-primary">Change</button>
        <a href="{{route('employers.index')}}"  class="btn btn-secondary">Back</a>
    </form>
@endsection
