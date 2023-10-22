@extends('layouts.master2')
@section('header')

@endsection
@section('content')
<table class="table">
<h3>Attendance</h3>
  <thead>
    <tr>
      <th scope="col">StudentId</th>
      <th scope="col">Name</th>
      <th scope="col">Attendance</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td><input type="checkbox" @if($student->isPresent=='1') checked @endif disabled></td>
 @endforeach
    </tr>
  </tbody>
</table>

@endsection
@section('footer')

@endsection