<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>CRUD LARAVEL</title>
</head>
<body>
    <nav>

        <div class="nav__logo"> <a href="{{ url('/home') }}">Laravel CRUD</a></div>

        <ul class="nav__links">

            <li class="link"><a href="{{ route('login') }}" class="nav__btn">Login</a></li>

            <li class="link"><a href="{{ route('register') }}" class="nav__btn">Register</a></li>

        </ul>
  
    </nav>

    <section class="container">
        <div class="content__container">
            <h1>
                CREATE READ<br />
                <span class="heading__1">UPDATE DELETE</span><br />
                <span class="heading__2">LARAVEL FRAMEWORK</span>
            </h1>
            <p></p>
            <form>
                <input type="text" placeholder="Enter Name..." />
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="image__container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <img src="{{ asset('images/logo2.png') }}" alt="Logo">
            <div class="image__content">
                <ul>
                    <li>With Login Validation</li>
                    <li>With Register Validation</li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>
