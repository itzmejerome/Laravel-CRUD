<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1> Welcome, {{ Auth::user()->name }}</h1>
     </div>
<form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Logout</button>
</form>
<div>
    <a href="{{ route('create.index') }}"><button>Add New Person</button></a>
</div>
<div>
    @if(session()->has('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif
</div>
<div>
    <form method="GET" action="{{ route('people.search') }}">
        <input type="text" name="query" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
</div>
<div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Addres</th>
            <th>Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($people as $people)
            <tr>
                <td>{{ $people->id }}</td>
                <td>{{ $people->name }}</td>
                <td>{{ $people->email }}</td>
                <td>{{ $people->address}}</td>
                <td>{{ $people->number }}</td>
                <td>
                    <a href="{{ route('people.edit', ['people' => $people]) }}">edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('people.delete', ['people' => $people])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
