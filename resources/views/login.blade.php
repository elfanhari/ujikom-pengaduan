<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  
  <h2>Login Page</h2> 

  @if (session()->has('info'))
      {{ session('info') }}
  @endif

  <br>

  <form action="{{ route('login.check') }}" method="post">
  @csrf
    <label for="username">Username</label>
    <input type="text" name="username" id="username"> <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password"> <br>

    <button type="submit" name="abc" id="abc">LOGIN</button> <br>
  </form>


</body>
</html>