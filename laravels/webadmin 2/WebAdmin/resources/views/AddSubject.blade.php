@extends('layouts.master')
@section('header')

@endsection
@section('content')
<style>
</style>
<div class="container">
  <h2>ADD NEW SUBJECT</h2>
  <br>
  <form method="POST" action="/addsubject1">
    @csrf
    <div class="form-group" style="width:25%;">
      <label>Subject ID</label>
     <input type="text" class="form-control" name="id">    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Subject Name</label>
      <input type="text" class="form-control" name="subject_name" >    
    </div>
        <div class="form-group" style="width:25%;">
      <label>Credits</label>
      <input type="text" class="form-control" name="slug" >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Subject Code</label>
      <input type="text" class="form-control" name="subject_code" >    
    </div>
     <div class="form-group" style="width:25%;">
      <label>Teacher Id</label>
      <input type="text" class="form-control" name="teacher_id" >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Description</label>
      <input type="text" class="form-control" name="description" >    
    </div>
     <button type="submit" class="btn btn-primary">Add New Subject</button>
    <br>
    <br>
  </form>

</div>
@endsection
@section('footer')

@endsection