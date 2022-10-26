<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image">

    <title>E-Perpus</title>

    <!-- bootstrap-->
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link href=" {{ asset('vendors/font-material/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" {{ asset('build/css/mycss.css') }}" rel="stylesheet">
  </head>
  <body>


    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="/signup" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        @error('message')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div> <br>
                        @enderror
                        <form action="{{ route('signin') }}" method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="username">
                                    <i class="zmdi zmdi-account material-icons-name"></i>
                                </label>
                                <input type="text" name="name" id="username" required placeholder="Username"/>
                            </div>
                            @error('username')
                                <i class="px-2 small text-danger">{{ $message }}</i>
                            @enderror
                            <div class="form-group">
                                <label for="your_pass">
                                    <i class="zmdi zmdi-lock"></i>
                                </label>
                                <input type="password" name="password" id="password" required placeholder="Password"/>
                            </div>
                            @error('password')
                                <i class="px-2 small text-danger">{{ $message }}</i>
                            @enderror
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signin" class="btn btn-sm btn-success submit"/>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
</body>
</html>
