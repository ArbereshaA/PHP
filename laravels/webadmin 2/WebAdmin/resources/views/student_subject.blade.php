@extends('layouts.master3')
@section('header')

@endsection

@section('content')

<h3 style="text-align:center;">
SUBJECTS
</h3>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SubjectId</th>
      <th scope="col">Name</th>
      <th scope="col">Credits</th>
      <th scope="col">Subject Code</th>
      <th scope="col">Teacher Id</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
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
      <td>{{$subject->teacher_id}}</td>
      <td>{{$subject->description}}</td>
      <td><a href=subjectstudent/{{$subject->id}}><button type="button" class="btn btn-warning">Show Students</button></a></td>
 @endforeach
    </tr>
  </tbody>
</table>
@endsection
@section('footer')

@endsection