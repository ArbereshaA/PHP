@extends('layouts.master')
@section('header')

@endsection
@section('content')
<style>
</style>
<div class="container">
  <h2>Edit A TEACHER</h2>
  @foreach($teacher as $t)
  <form method="POST" action=/edit/{{$t->id}}>
    @csrf
    <div class="form-group" style="width:25%;">
      <label>Name</label>
      <input type="text" class="form-control" name="teacher_name" value={{$t->teacher_name}}>    
    </div>
       <div class="form-group" style="width:25%;">
      <label>Contact Number</label>
      <input type="text" class="form-control" name="phone" value={{$t->phone}}>    
    </div>
        <div class="form-group" style="width:25%;">
      <label>Birth Date</label>
      <input type="date" class="form-control" name="dateofbirth" value={{$t->dateofbirth}}>    
    </div>
     <div class="form-group" style="width:25%;">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value={{$t->email}}>    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Address</label>
      <input type="text" class="form-control" name="address" value={{$t->address}} >    
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