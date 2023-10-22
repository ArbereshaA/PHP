@extends('layouts.master')
@section('header')

@endsection

@section('content')
<table class="table">
<h3>Details for the student</h3>
  <thead>
    <tr>
      <th scope="col">StudentId</th>
      <th scope="col">Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Subject Id</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($students as $s)
    <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{$s->name}}</td>
      <td>{{$s->phone}}</td>
      <td>{{$s->gender}}</td>
      <td>{{$s->dayofbirth}}</td>
      <td>{{$s->address}}</td>
      <td>{{$s->email}}</td>
      <td>{{$s->subject_id}}</td>
 @endforeach
    </tr>
  </tbody>
</table>
@endsection

@section('footer')
@endsection