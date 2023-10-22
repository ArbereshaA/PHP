@extends('layouts.master')
@section('header')

@endsection
@section('content')

<div class="container">
  <h2>ADD NEW STUDENT</h2>

  <form method="POST" action="/addstudent1">
    @csrf
    <div class="form-group" style="width:25%;">
     <label>StudentID</label>
      <input type="text" class="form-control" name="id">    
    </div>
    <div class="form-group" style="width:25%;">
     <label>Name</label>
      <input type="text" class="form-control" name="name" >    
    </div>
       <div class="form-group" style="width:25%;">
      <label>Contact Number</label>
      <input type="text" class="form-control" name="phone" >    
     </div>

      <div class="form-group" style="width:25%;">
      <tr><td rowspan="2">Gender</td>  <br>
      <td><input type="radio" name="gender" value="Male"/>Male</td>  
      <tr>  
      <td><input type="radio" name="gender" value="Female"/>Female</td></tr>  
      </tr>
    </div>
     <div class="form-group" style="width:25%;">
      <label>Birth Date</label>
      <input type="date" class="form-control" name="dayofbirth" >    
     </div>
       <div class="form-group" style="width:25%;">
      <label>Address</label>
      <input type="text" class="form-control" name="address" >    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Email</label>
      <input type="text" class="form-control" name="email" >    
    </div>
          <div class="form-group" style="width:25%;">
      <label>Subject Id</label>
      <input type="text" class="form-control" name="subject_id" >    
    </div>
   

    <button type="submit" class="btn btn-primary">Add New Student</button>
  </form>
</div>
@endsection
@section('footer')

@endsection