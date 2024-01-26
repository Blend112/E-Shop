<?php 
    include 'baseCode.php';
    $obj = new LidhjaDB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
  
  body {
    font-family: Arial, sans-serif;
    background: #f7f7f7;
  }
  .login-container {
    width: 300px;
    margin: 100px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
  }
  .login-container img {
    display: block;
    margin: 0 auto 20px;
    max-width: 100%; 
    height: 178px;
  }
  .login-container h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  .login-container form {
    display: flex;
    flex-direction: column;
  }
  .login-container input[type="email"],
  .login-container input[type="password"] {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 10px; /
  }
  .login-container button {
    padding: 10px;
    background: #ff5722;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 10px; 
  }
  .login-container button:hover {
    background: #e64a19;
  }
  .login-container .alternative {
    text-align: center;
    margin-top: 20px;
  }
</style>
</head>
<body>

<div class="login-container">
  <img src="fotot per projekt\logot\logo.png" alt="fotot per projekt\logot\logo.png"> 
  <h2>Login to Your Account</h2>
  <form action="index.html" method="post">
    <input type="email" name="email" placeholder="Email address" id="email" required>
    <div id="emailError"></div>
    <input type="password" name="password" placeholder="Password" id="password" required>
    <div id="passwordError"></div>
    <button type="submit" onclick="validateform()">Sign in</button>
    <div class="alternative">
      <p>Or</p>
       <a href="register.html">Don't have an account? Register</a>
    </div>
  </form>
  
</div>
<script>
  let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
  let passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
  function validateform(){
    let emailInput = document.getElementById("email");
    let emailError = document.getElementById("emailError");
    let password = document.getElementById("password");
    let passwordError = document.getElementById("passwordError");

    emailError.innerText = '';
    passwordError.innerText = '';

    if(!emailRegex.test(emailInput.value)){
      emailError.innerText = 'The email is invalid here is an example: "example@gmail.com"';
      return;
    }
    if(!passwordRegex.test(passwordInput.value)){
            passwordError.innerText = 'The password must have at least 8 characters a number and begin with a capital letter';
            return;
        }
        alert('You have signed in successfully');
  }


</script>

</body>
</html>
