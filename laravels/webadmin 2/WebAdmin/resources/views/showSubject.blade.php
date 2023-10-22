@extends('layouts.master')
@section('header')

@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">SubjectId</th>
      <th scope="col">Name</th>
      <th scope="col">Credits</th>
      <th scope="col">Subject Code</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  @foreach ($subjects as $subject)
    <tr>
      <th scope="row">{{$subject->id}}</th>
      <td>{{$subject->subject_name}}</td>
      <td>{{$subject->slug}}</td>
      <td>{{$subject->subject_code}}</td>
      <td>{{$subject->description}}</td>

 @endforeach
    </tr>
  </tbody>
</table>
@endsection
@section('footer')
@endsection