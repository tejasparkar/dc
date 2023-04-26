<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    DCDESIGNS
  </div>
    </nav>

    <div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <h1>Register</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
        <form action="/register" method="POST" class="col-4" style="padding:1%"> 
@csrf
<div class="mb-3 ">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
    @error('name')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3 ">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
    @error('email')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
    @error('password')
    {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation">
    @error('password_confirmation')
    {{$message}}
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<p>have an accout? <a href="/login">Login now</a> </p>
    </div>

</div>

        </div>
    </div>

    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
