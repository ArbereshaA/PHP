@extends('layouts.master')
@section('header')

@endsection

@section('content')
<a href=addTeacher><button type="button" class="btn btn-primary">Add new Teacher</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">TeacherId</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col"></th>
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
      <td>{{$teacher->email}}</td>
      <td>{{$teacher->phone}}</td>
      <td>{{$teacher->gender}}</td>
      <td><a href=showteacher/{{$teacher->id}}><button type="button" class="btn btn-info">Details</button></a></td>
      <td><a href=editteacher/{{$teacher->id}}><button type="button" class="btn btn-info">EDIT</button></a></td>
      <td><a href=delteacher/{{$teacher->id}}><button type="button" class="btn btn-info">DELETE</button></a></td>
      <td><a href=teachersubject/{{$teacher->id}}><button type="button" class="btn btn-info">Show All Subjects</button></a></td>
 @endforeach
    </tr>
  </tbody>
</table>
@endsection
@section('footer')

@endsection