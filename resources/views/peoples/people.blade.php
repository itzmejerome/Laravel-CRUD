<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of People</title>
    <link href="{{ asset('css/people.css') }}" rel="stylesheet">

</head>
<body>

    <div class="container">
        <h1 style="color: White; font-size: 24px; font-weight: bold;"> Welcome, {{ Auth::user()->name }}</h1>



            <header>

                <div class="filterEntries">
                    <div class="entries">
                        Show <select name="" id="table_size">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </div>

                    <style>
                        .button {
                            padding: 5px 14px;
    color: #dae0e7;
    background: transparent;
    font-size: 16px;
    cursor: pointer;
    pointer-events: auto;
    outline: none;
    border: 1px solid #404346;
    background: #2d3135;
    border-radius: 5px;
    margin-bottom: 13px;


                        }
                        .button2 {
                            padding: 5px 14px;
    color: #dae0e7;
    background: transparent;
    font-size: 16px;
    cursor: pointer;
    pointer-events: auto;
    outline: none;
    border: 1px solid #404346;
    background: #2d3135;
    border-radius: 5px;
    width: 80px;
    margin-top: 3px;

                        }
                        .button button:hover{
    background: #424549;
}
                    </style>
                    <div class="filter">
                        {{-- <label for="search">Search:</label>
                        <input type="search" name="" id="search" placeholder="Enter Name/Address/Email/Number"> --}}
                        <div>
                            <form method="GET" action="{{ route('people.search') }}">
                                <input type="text" name="query" placeholder="Search...">
                                <button type="submit" class="button">Search</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="addMemberBtn">
                    <a href="{{ route('create.index') }}"><button>Add New People</button>

                </div>
                <div class="addMembersBtn">
                    <form action="{{ route('logout') }}" method="POST" role="search">
                        @csrf
                        @method('DELETE')
                        <button class="button" type="submit">Logout</button>
                    </form>
                </div>


            </header>





<div>
    @if(session()->has('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif
</div>

<div>
</header>

    <table border="1" class="content-table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Addres</th>
            <th>Number</th>
            <th>Action</th>

        </tr>
        </thead>

        @foreach($people as $people)
        <tbody class="userInfo">
            <tr>
                <td>{{ $people->id }}</td>
                <td>{{ $people->name }}</td>
                <td>{{ $people->email }}</td>
                <td>{{ $people->address}}</td>
                <td>{{ $people->number }}</td>
                <td>
                    <a href="{{ route('people.edit', ['people' => $people]) }}"><button class="button2">edit</button></a>


                    <form method="post" action="{{ route('people.delete', ['people' => $people])}}">
                        @csrf
                        @method('delete')
                        <button class="button2">Delete</button>
                    </form>

                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <footer>
        <span class="showEntries">Showing 1 to 10 of 50 entries</span>
        <div class="pagination">
            <button>Prev</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button>Next</button>
        </div>
    </footer>
</div>
</body>
</html>
