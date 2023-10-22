@extends('layouts.master2')
@section('header')

@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">StudentId</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  @foreach ($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
        <td><a href=showstudent/{{$student->id}}><button type="button" class="btn btn-success">Details</button></a></td>

 @endforeach
    </tr>
  </tbody>
</table>
@endsection
@section('footer')

@endsection