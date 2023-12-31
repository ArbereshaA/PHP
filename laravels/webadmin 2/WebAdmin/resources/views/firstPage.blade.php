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

</head>
 <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offser-4" style="margin-top:20px;">
        <h4>Login</h4>
        <hr>
        <form>
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email">
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
          </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password">
             <span class="text-danger">@error('password') {{$message}} @enderror</span>
          </div>
          <div class="form-group">
          <br>
          <h3>Login As:</h3><br>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="/loginUser"><button type="button" class="btn btn-secondary">Admin</button></a>
            <a href="/loginTeacher"><button type="button" class="btn btn-secondary">Teacher</button></a>
            <a href="/loginStudent"><button type="button" class="btn btn-secondary">Student</button></a>
          </div>
          </div>
        </form>
      </div>
     </div>
  </div> 

</body>
</html>