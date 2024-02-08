<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="input-box">
                <label for="email"></label>
                <input type="email" name="email" class="input-field" id="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <label for="password"></label>
                <input type="password" name="password" class="input-field" id="password" placeholder="Password" required>
            </div>

            <div class="forgot">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check">Remember me</label>
                </section>
                <section>
                    <a href="#">Forgot password</a>
                </section>
            </div>
            <div class="input-submit">
                <button type="submit" class="submit-btn" id="submit"></button>
                <label for="submit">Sign In</label>
            </div>
            <div class="input-submit">
                <a href="{{ route('welcome') }}" class="submit-btn" id="submit">Back</a>
                <label for="submit"></label>
            </div>

            <div class="sign-up-link">
                <p>Don't have an account? <a href="#">Sign Up</a></p>
            </div>
        </form>

    </div>
</body>
</html>
