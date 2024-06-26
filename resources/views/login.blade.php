<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Creative Login page</title>
    <link rel="shortcut icon" type="x-icon" href="/asset/logo.png">
</head>
<link rel="stylesheet" href="/asset/stylels.css">
<body>
    <div class="wrapper">

        <div class="login-box">
          <form action="{{route('login')}}" method="POST">
            @csrf
            <h2>Login</h2>
      
            <div class="input-box">
              <span class="icon">
                <ion-icon name="mail"></ion-icon>
              </span>
              <input type="email"   name="email" id="username" required>
              <label>Email</label>
            </div>
      
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
              </span>
              <input type="password" name="password" id="password" required>
              <label>Password</label>
            </div>
      
            <div class="remember-forgot">
              <label><input type="checkbox"> Remember me</label>
              <a href="#">Forgot Password?</a>
            </div>
      
            <button type="submit">Login</button>
      
            <div class="register-link">
              <p>Don't have an account? <a href="/signup">Register</a></p>
            </div>
          </form>
        </div>
      
      </div>
</body>
</html>
