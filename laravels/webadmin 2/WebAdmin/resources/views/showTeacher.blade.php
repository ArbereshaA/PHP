@extends('layouts.master')
@section('header')

@endsection

@section('content')
<h3>DETAILS FOR THE TEACHER</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">TeacherId</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Gender</th>
      <th scope="col">BirthDate</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  @foreach ($teachers as $teacher)
    <tr>
      <th scope="row">{{$teacher->id}}</th>
      <td>{{$teacher->teacher_name}}</td>
      <td>{{$teacher->address}}</td>
      <td>{{$teacher->email}}</td>
      <td>{{$teacher->phone}}</td>
      <td>{{$teacher->gender}}</td>
      <td>{{$teacher->dateofbirth}}</td>
 @endforeach
    </tr>
  </tbody>
</table>

@endsection
@section('footer')
@endsection