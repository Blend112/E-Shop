<?php 
    include 'baseCode.php';
    $obj = new LidhjaDB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="combined.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="navbar.css">

</head>
<body>
<?php 
    $obj->getHeader();

?>
    <div class="formContainer">    
        <h1>Contact Us</h1>    
        <form class="forma" method="post" action="">
            <input type="text" placeholder="Type your name">
            <input type="email" placeholder="Type your email">
            <input type="number" placeholder="Type your phone number">
            <textarea name="" id="" cols="30" rows="10" placeholder="Type a message"></textarea>
            <input type="submit" name="" id="formButton" value="Submit">
        </form>
    </div>



    <script src="drop_down.js">

    </script>
    <footer>
  
        <div class="social-media">
           
            <a href="https://facebook.com">Facebook</a>
            <a href="https://twitter.com">Twitter</a>
            <a href="https://instagram.com">Instagram</a>
        </div>
        <br>
        <p>&copy; 2023 E-Shop. All rights reserved.</p>
    </footer>
</body>

</html>