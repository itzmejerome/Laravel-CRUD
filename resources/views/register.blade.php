<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Register an Account</header>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="input-box">
                <label for="name"></label>
                <input type="name" name="name" class="input-field" id="name" placeholder="Name" required>
            </div>
            <div class="input-box">
                <label for="email"></label>
                <input type="email" name="email" class="input-field" id="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <label for="password"></label>
                <input type="password" name="password" class="input-field" id="password" placeholder="Password" required>
            </div>

            <div class="input-submit">
                <button type="submit" class="submit-btn" id="submit"></button>
                <label for="submit">Register</label>

            </div>

            <div class="input-submit">
                <a href="{{ route('welcome') }}" class="submit-btn" id="submit">Back</a>
                <label for="submit"></label>
            </div>





        </form>

    </div>
</body>
</html>
