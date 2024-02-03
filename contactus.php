<?php 
    include 'baseCode.php';
    $obj = new LidhjaDB();
    $sendMessage = new SendMessage();
    $sendMessage -> insertMessage();


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
            <input type="text" placeholder="Type your name" name="emri">
            <input type="email" placeholder="Type your email"name="email">
            <input type="tel" placeholder="Type your phone number"name="numri">
            <textarea name="teksti" id="" cols="30" rows="10" placeholder="Type a message"></textarea>
            <input type="submit" name="" id="formButton" value="Submit">
        </form>
    </div>



    <script src="drop_down.js">

    </script>
     <?php 
    $obj->getFooter();
     ?>
</body>

</html>