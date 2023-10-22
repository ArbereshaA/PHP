@extends('layouts.master')
@section('header')

@endsection
@section('content')
<style>
</style>
<div class="container">
  <h2>EDIT THE SUBJECT</h2>
  <br>
  @foreach($subject as $s)
  <form method="POST" action=/edittt/{{$s->id}}>
    @csrf
    <div class="form-group" style="width:25%;">
      <label>Subject Name</label>
      <input type="text" class="form-control" name="subject_name" value={{$s->subject_name}}>    
    </div>
        <div class="form-group" style="width:25%;">
      <label>Credits</label>
      <input type="text" class="form-control" name="slug" value={{$s->slug}} >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Subject Code</label>
      <input type="text" class="form-control" name="subject_code" value={{$s->subject_code}}>    
    </div>
     <div class="form-group" style="width:25%;">
      <label>Teacher Id</label>
      <input type="text" class="form-control" name="teacher_id" value={{$s->teacher_id}}>    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Description</label>
      <input type="text" class="form-control" name="description" value={{$s->description}}>    
    </div>
   
     <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <br>
  </form>

</div>
@endforeach
@endsection
@section('footer')

@endsection