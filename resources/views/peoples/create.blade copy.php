<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data</title>
    <link href="{{ asset('css/people.css') }}" rel="stylesheet">

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



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Add Data</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
      <link href="{{ asset('css/people.css') }}" rel="stylesheet">

  </head>
  <body>
  @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
    @endif
    <div class="container">
      <h1 class="form-title">Add Person</h1>
      <form method="post" action="{{ route('people.store') }}">
      @csrf
    @method('post')
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text"
                    name="name"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="username">Address</label>
            <input type="text"
                    name="address"
                    placeholder="Enter Address"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    name="number"
                    placeholder="Enter Phone Number"/>
          </div>
        </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </body>
</html>
