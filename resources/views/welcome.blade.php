<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>CRUD LARAVEL</title>
    <style>
        /* CSS for search results section */
        .search-results {
            margin-top: 20px; /* Add margin-top to create space between the search form and the results */
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-results h2 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .search-results ul {
            list-style: none;
            padding: 0;
        }

        .search-results li {
            margin-bottom: 5px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav__logo">
            <a href="{{ url('/home') }}">Laravel CRUD</a>
        </div>
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
            <form method="GET" action="{{ route('people.search') }}">
                <input type="text" name="query" placeholder="Search...">
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
    <!-- Section to display search results -->
    <section class="search-results">
        <h2>Search Results</h2>
        <ul>
            <!-- This list will be populated with search results dynamically -->
        </ul>
    </section>
</body>
</html>
