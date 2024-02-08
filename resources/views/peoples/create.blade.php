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
<h1>Add a people</h1>
<div>
    <a href="{{ route('people.index') }}"><button>Back</button></a>
</div>
<form method="post" action="{{ route('people.store') }}">
    @csrf
    @method('post')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name"/>
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" placeholder="address"/>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" placeholder="email"/>
    </div>
    <div>
        <label>Number</label>
        <input type="number" name="number" placeholder="Phone Number"/>
    </div>
    <div>
        <input type="submit" value="save a new information">
    </div>
</form>
</body>
</html>
