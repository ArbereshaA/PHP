@extends('layouts.master')
@section('header')

@endsection
@section('content')
<style>
</style>
<div class="container">
  <h2>ADD NEW TEACHER</h2>
  <br>
  <form method="POST" action="/addteacher1">
    @csrf
    <div class="form-group" style="width:25%;">
      <label>TeacherID</label>
     <input type="text" class="form-control" name="id">    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Name</label>
      <input type="text" class="form-control" name="teacher_name" >    
    </div>
        <div class="form-group" style="width:25%;">
      <tr><td rowspan="2">Gender</td>  <br>
      <td><input type="radio" name="gender" value="Male"/>Male</td>  
      <tr>  
      <td><input type="radio" name="gender" value="Female"/>Female</td></tr>  
      </tr>
    </div>
        <div class="form-group" style="width:25%;">
      <label>Contact Number</label>
      <input type="text" class="form-control" name="phone" >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Birth Date</label>
      <input type="date" class="form-control" name="dateofbirth" >    
    </div>
     <div class="form-group" style="width:25%;">
      <label>Email</label>
      <input type="email" class="form-control" name="email" >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Address</label>
      <input type="text" class="form-control" name="address" >    
    </div>
   
     <button type="submit" class="btn btn-primary">Add New Teacher</button>
    <br>
    <br>
  </form>

</div>
@endsection
@section('footer')

@endsection