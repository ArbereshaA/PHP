@extends('layouts.master2')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
      <h3 class="text-center">{{ $students }}</h3>
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
@section('footer')

@endsection
</body>
</html>