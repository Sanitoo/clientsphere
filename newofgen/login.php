<?php
session_start();

include "connectdatabase.php";

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = $_POST['email'];
    $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email'";

        $query = mysqli_query($connect,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $hashed_password = $row['Password'];
            $type = $row['user_type'];

        if(password_verify($password, $row["Password"])){

                session_start();

                if ($type == "admin") {
                $_SESSION['id'] = $row['id'];
                header("Location: ../newofgen/dash.php");
                }else if ($type == "manager") {
                $_SESSION['id'] = $row['id'];       
                header("Location: ../newofgen/dashma.php");
                }else if ($type == "user") {
                $_SESSION['id'] = $row['id'];       
                header("Location: ../newofgen/dashsta.php");
                }

        } else {
            $errorMessage = "Invalid username or password";
        }
    } else {
        $errorMessage = "Invalid username or password";
    }
}
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign in</title>
  <link rel="stylesheet" type="text/css" href="stiile.css">
  <link rel="icon"  href="cls.png" />
</head>
<body>
<header class="header">
      <nav class="navbar">
        <h1 class="logo"><a href="#">CLIENTSPHERE</a></h1>
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </label>
        <ul class="links">
          <li><a href="ofneg.php">Home</a></li>
          <li><a href="abut.php">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="buttons">
          <a href="login.php" class="signin">Sign In</a>
          <a href="register.php" class="signup">Sign Up</a>
        </div>
      </nav>
    </header>
  <div class="wrapper">
   <form method="POST" >

      <h2>Login</h2>
      <?php if(isset($errorMessage)) { ?>
        <p style="color:red;"><?php echo $errorMessage; ?></p>
    <?php } ?>
      
        <div class="input-field">
        <input type="email" name="email" id="email">
        <label>Enter your email</label>
       <div class="error" id="result1"></div>
      </div>
      <div class="input-field">
        <input type="password" name="password" id = "password">
       <div class="error" id="result2"></div> 
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" name="login">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
  <script>
    
function validateForm(event) {
    event.preventDefault();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;

    if (!emailRegex.test(email)) {
        document.getElementById('result1').innerHTML = "Enter a valid email address";
        return false;
    } else {
        document.getElementById('result1').innerHTML = "";
    }

    if (!passwordRegex.test(password)) {
        document.getElementById('result2').innerHTML = "Password must meet the following criteria:<br>" +
            "- At least 8 characters long<br>" +
            "- Contains at least one uppercase letter" +
            "- Contains at least one lowercase letter" +
            "- Contains at least one digit" +
            "- Contains at least one special character<br>";
        return false;
    } else {
        document.getElementById('result2').innerHTML = "";
    }

    

    alert("Form submission SUCCESS!");
    return true;
}

document.getElementById('password').addEventListener('input', function(event) {
    const password = event.target.value.trim();
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;

    if (password.match(passwordRegex)) {
        document.getElementById('result2').innerHTML = "";
    }
});


  </script>
</body>
</html>