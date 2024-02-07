<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Creative Login page</title>
</head>
<link rel="stylesheet" href="/asset/stylels.css">
<body>
    <div class="wrapper">

        <div class="login-box">
          <form action="{{route('signup')}}"  method="POST">
            @csrf
            <h2>SignUp</h2>
            
            <div class="input-box">
              <span class="icon">
                <ion-icon name="name"></ion-icon>
              </span>
              <input type="text" name="name" id="name" required>
              <label>Name</label>
            </div>
            
            <div class="input-box">
              <span class="icon">
                <ion-icon name="email"></ion-icon>
              </span>
              <input type="email" name="email"  id="email" required>
              <label>Email</label>
            </div>
      
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
              </span>
              <input type="password" name="password" id="password" required>
              <label>Password</label>
            </div>

            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
              </span>
              <input type="password" name="cpassword" id="cpassword" required>
              <label>Confirm Password</label>
            </div>
      
      
            <div class="remember-forgot">
              <label><input type="checkbox"> Remember me</label>
              <a href="#">Forgot Password?</a>
            </div>
      
            <button type="submit">Register</button>
      
            <div class="register-link">
              <p>Already have an account? <a href="/login">Login</a></p>
            </div>
          </form>
        </div>
      
      </div>
</body>
</html>
