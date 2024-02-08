<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
    @endif
<h1>Edit people</h1>
<form method="post" action="{{ route('people.update', ['people' => $people ]) }}">
    @csrf
    @method('put')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name" value="{{ $people->name }}"/>
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" placeholder="address" value="{{ $people->address }}"/>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" placeholder="email" value="{{ $people->email }}"/>
    </div>
    <div>
        <label>Number</label>
        <input type="number" name="number" placeholder="Phone Number" value="{{ $people->number }}"/>
    </div>
    <div>
        <input type="submit" value="update">
    </div>
</form>
</body>
</html>
