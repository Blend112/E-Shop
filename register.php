<?php 
    include 'baseCode.php';
    $obj = new register();
    $obj->register();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<style>
  
  body {
    font-family: Arial, sans-serif;
    background: #f7f7f7;
  }
  .register-container {
    height: 550px;
    width: 300px;
    display: flex;
    flex-direction:column ;
    margin: 100px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
  }
  .register-container img {
    display: block;
    margin: 0 auto 20px;
    max-width: 100%; 
    height: 178px;
  }
  .register-container h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  .register-container form {
    display: flex;
    flex-direction: column;
  }
  .register-container input[type="text"],
  .register-container input[type="email"],
  .register-container input[type="password"],
  .register-container input[type="confirm_password"]
  
  {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 10px;
  }
  .register-container button {
    padding: 10px;
    background: #ff5722;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 10px; 
    margin-bottom: 30px;
  
  }
  .register-container button:hover {
    background: #e64a19;
  }
  .register-container .alternative {
    text-align: center;
    margin-top: 20px;
  }
  footer {
    color: white;
    padding: 20px;
    text-align: center;
}

footer ul {
    list-style: none;
    padding: 0;
}

footer ul li {
    margin-bottom: 10px;
}

footer .social-media {
    margin-top: 20px;
}

</style>
</head>
<body>

<div class="register-container">
  <img src="fotot per projekt\logot\logo.png" alt="Logo"> 
  <h2>Register a New Account</h2>
  <form action="" method="post">
    <input id="username" type="text" name="username" placeholder="Username" required>
    <div id="usernameError"></div>

    <input id="email" type="email" name="email" placeholder="Email address" required>
    <div id="emailError"></div>

    <input id="password" type="password" name="password" placeholder="Password" required>
    <div id="passwordError"></div>

    <input id="passwordconfirm" type="password" name="confirm_password" placeholder="Confirm Password" required>
    <div id="confirm_passwordError"></div>

    <button type="submit" onclick="register()" name="btnR">Register</button>
    <div class="alternative">

      <a href="login.php">Already have an account? Login</a>
    </div>
  </form>
</div>
<script>
    let usernameRegex = /^.{8,15}$/;
    let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    let passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
  function register(){
    

    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');
    let usernameInput = document.getElementById('username');
    let usernameError = document.getElementById('usernameError');
    let passwordInput = document.getElementById('password');
    let passwordError = document.getElementById('passwordError');
    let confirmPasword = document.getElementById('passwordconfirm');
    let confirmPaswordError = document.getElementById('confirm_passwordError');
    if(!(passwordInput.value == confirmPasword.value)){
        confirm_PaswordError.innerHTML = "<p> the password must match </p>"
        return;
    }

    emailError.innerText = '';
    usernameError.innerText = '';
    passwordError.innerText = '';


        if(!usernameRegex.test(usernameInput.value)){
            usernameError.innerText = 'The user name must have 8-15 characters';
            return;
        }
        if(!emailRegex.test(emailInput.value)){
            emailError.innerText = 'The email is invalid here is an example: "example@gmail.com"';
            return;
        }
        if(!passwordRegex.test(passwordInput.value)){
            passwordError.innerText = 'The password must have at least 8 characters a number and begin with a capital letter';
            return;
        }

        alert('You have registered successfully!');
    }



</script>


