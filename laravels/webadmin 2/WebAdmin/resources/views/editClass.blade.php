@extends('layouts.master')
@section('header')

@endsection
@section('content')
<style>
</style>
<div class="container">
  <h2>ADD NEW SUBJECT</h2>
  <br>
  @foreach($course as $c)
  <form method="POST" action=/editttt/{{$c->id}}>
    @csrf
    <div class="form-group" style="width:25%;">
      <label>Class Name</label>
      <input type="text" class="form-control" name="class_name" value={{$c->class_name}}>    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Teacher Id</label>
      <input type="text" class="form-control" name="teacher_id" value={{$c->teacher_id}} >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Description</label>
      <input type="text" class="form-control" name="description" value={{$c->description}}>    
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