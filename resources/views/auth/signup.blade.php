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
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form action="{{ route('register') }}" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">
                                    <i class="zmdi zmdi-account material-icons-name"></i>
                                </label>
                                <input type="text" name="name" id="name" placeholder="Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <i class="zmdi zmdi-email"></i>
                                </label>
                                <input type="email" name="email" id="email" required placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass">
                                    <i class="zmdi zmdi-lock"></i>
                                </label>
                                <input type="password" name="password" id="pass" required placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="pass">
                                    <i class="zmdi zmdi-lock"></i>
                                </label>
                                <input type="password" name="password" id="pass" required placeholder="Confirm Password"/>
                            </div>
                            <div class="form-group form-button">
                                <button class="btn btn-primary submit" type="submit" name="signup" id="signup" >Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="/" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
