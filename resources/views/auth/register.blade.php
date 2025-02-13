<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('cssloginregister/style.css') }}">
  </head>
  <body>
    <div class="wrapper" style="margin-left: 20px; margin-right: 20px">
      <img src="{{ asset('images/logo-8.png') }}" alt="">
      <h2 class="text-center">Register</h2>
      <form action="{{ route('register.store')}}" method="post">
        @csrf
        <div class="input-box">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name" required>
         
        </div>
        <div class="input-box">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
          
        </div>
        <div class="input-box">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password" required>
          
        </div>
        <div class="input-box">
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password" required>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Register">
        </div>

        <!--
        <div class="text">
          <h3>Don't have an account? <a href="#">Register now</a></h3>
        </div>
        -->
        
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>