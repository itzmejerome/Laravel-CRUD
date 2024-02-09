<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Add Data</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
      <link href="{{ asset('css/create.css') }}" rel="stylesheet">

  </head>
  <body>

    <div class="container">
        <a href="{{ route('people.index') }}"><button class="button">Back</button></a>

      <h1 class="form-title">Fill-up Information</h1>
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
          @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
    @endif
        </div>

          <div class="form-submit-btn">
            <input type="submit" value="Submit">



          </div>
        </div>

      </form>

    </div>
  </body>
</html>
