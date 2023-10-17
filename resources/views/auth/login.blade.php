<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/auth/css/style.css') }}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
 <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <img class="wave" src="{{ asset('backend/auth/img/wave.png') }}">

    <div class="container">

        <div class="img">
            <img src="{{ asset('backend/auth/img/bg.svg') }}">
        </div>

        <div class="login-content">

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <img src="{{ asset('backend/auth/img/person.svg') }}">

                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('backend/auth/js/main.js') }}"></script>
</body>

</html>
