@extends('layouts.master')
@section('header')

@endsection
@section('content')
<style>
</style>
<div class="container">
  <h2>ADD NEW SUBJECT</h2>
  <br>
  <form method="POST" action="/addclass1">
    @csrf
    <div class="form-group" style="width:25%;">
      <label>Class ID</label>
     <input type="text" class="form-control" name="id">    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Class Name</label>
      <input type="text" class="form-control" name="class_name" >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Teacher Id</label>
      <input type="text" class="form-control" name="teacher_id" >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Description</label>
      <input type="text" class="form-control" name="description" >    
    </div>
   
     <button type="submit" class="btn btn-primary">Add New Class</button>
    <br>
    <br>
  </form>

</div>
@endsection
@section('footer')

@endsection