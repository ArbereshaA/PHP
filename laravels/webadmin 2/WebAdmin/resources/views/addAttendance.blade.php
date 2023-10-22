@extends('layouts.master2')
@section('header')

@endsection
@section('content')

@foreach ($student as $s)
<form method="POST" action=/addattendance/{{$s->id}}>
    @csrf
    
  <table class="table">
  <thead>
    <tr>
      <th scope="col">StudentId</th>
      <th scope="col">Name</th>
      <th scope="col">Attendance (1-Present, 0-Absent)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{$s->name}}</td>
      <td> <input type="boolean" name="isPresent"></td>
 @endforeach
    </tr>
  </tbody>
  </table>

  
  <button type="submit" class="btn btn-success">submit</button>
</form>
</table>
@endsection
@section('footer')

@endsection