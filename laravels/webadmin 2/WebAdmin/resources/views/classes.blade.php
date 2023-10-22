@extends('layouts.master')
@section('header')

@endsection

@section('content')
<a href=addClass><button type="button" class="btn btn-primary">Add new Class</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ClassId</th>
      <th scope="col">Class Name</th>
      <th scope="col">Assign Teacher</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $course)
    <tr>
      <th scope="row">{{$course->id}}</th>
      <td>{{$course->class_name}}</td>
      <td>{{$course->teacher_id}}</td>
      <td>{{$course->description}}</td>
      <td><a href=editclass/{{$course->id}}><button type="button" class="btn btn-info">EDIT</button></a></td>
      <td><a href=delclass/{{$course->id}}><button type="button" class="btn btn-info">DELETE</button></a></td>
 @endforeach
    </tr>
  </tbody>
</table>
@endsection
@section('footer')

@endsection