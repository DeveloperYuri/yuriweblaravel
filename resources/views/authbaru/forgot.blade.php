<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password Page</title>

    <link rel="stylesheet" href="{{ asset('cssmultiauth/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="container">
        @include('_message')
        
        <div class="wrapper">

            <div class="login">
                <img src="{{ asset('images/logo-8.png') }}" alt="" width="30%" style="">
            </div>
            
            <div class="title"><span>Forgot Password</span></div>
            <form action="{{ url('forgot_post')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="{{ old('email')}}" placeholder="Email" required name="email">
                </div>
                
                <div class="row button">
                    <input type="submit" value="Forgot Password">
                </div>

                <div class="signup-link">
                    Sign In? <a href="{{ url('login') }}">Login</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>