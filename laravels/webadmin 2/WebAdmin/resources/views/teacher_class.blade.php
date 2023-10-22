@extends('layouts.master2')
@section('header')

@endsection

@section('content')
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
 @endforeach
    </tr>
  </tbody>
</table>
@endsection
@section('footer')

@endsection