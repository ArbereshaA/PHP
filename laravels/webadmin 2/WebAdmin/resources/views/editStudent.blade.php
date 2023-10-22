@extends('layouts.master')
@section('header')

@endsection
@section('content')

<h2>Edit a Student</h3>
@foreach($student as $s)
<form method="POST" action=/editt/{{$s->id}}>
    @csrf
    <div class="form-group" style="width:25%;">
     <label>Name</label>
      <input type="text" class="form-control" name="name" value={{$s->name}}>    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Contact Number</label>
      <input type="text" class="form-control" name="phone" value={{$s->phone}} >    
     </div>
    <div class="form-group" style="width:25%;">
      <label>Birth Date</label>
      <input type="date" class="form-control" name="dayofbirth" value={{$s->dayofbirth}} >    
     </div>
    <div class="form-group" style="width:25%;">
      <label>Address</label>
      <input type="text" class="form-control" name="address" value={{$s->address}}>    
    </div>
    <div class="form-group" style="width:25%;">
      <label>Email</label>
      <input type="text" class="form-control" name="email" value={{$s->email}}>    
    </div>
     <div class="form-group" style="width:25%;">
      <label>Subject id</label>
      <input type="text" class="form-control" name="subject_id" value={{$s->subject_id}}>    
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endforeach
@endsection

@section('footer')

@endsection