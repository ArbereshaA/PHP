<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.card {
    width: 18rem;
    height: 30px;
     display: flex;
}


</style>
    <title></title>
</head>
<body>
@extends('layouts.master')
<style>
.w3-card-4 {
 float: left;
  width: 25%;
}
.card-title{
    
}

</style>
@section('header')

@endsection
@section('content')
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="/images/students.png" alt="Card image cap">
    <div class="card-body">
    <br>
    <br>
    <br>
      <h2 class="text-center">Students</h2>
      <h3 class="text-center">{{ $students}}</h3>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/images/teachers.jpg" alt="Card image cap">
    <div class="card-body">
      <h2 class="text-center">Teachers</h2>
      <h3 class="text-center">{{ $teachers }}</h3>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/images/subjectsss.jpg" alt="Card image cap">
    <div class="card-body">
      <h2 class="text-center">Subjects</h2>
      <h3 class="text-center">{{ $subjects }}</h3>
    </div>
  </div>
    <div class="card">
    <img class="card-img-top" src="/images/drop.png" alt="Card image cap">
    <div class="card-body">
      <h2 class="text-center">Classes</h2>
      <h3 class="text-center">{{ $courses }}</h3>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
@endsection
</body>
</html>