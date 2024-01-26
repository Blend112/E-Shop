<?php 
    include 'baseCode.php';
    $obj = new products();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphones</title>
    <link rel="stylesheet" href="combined.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <body>
    <?php 
    $obj->getHeader();

?>
      
        <div class="smartphonesp">
          <div class="smartphones">
            <?php
            $obj->getSmartphones();
            ?>
          </div>
        </div>
        
  <footer>
  
    <div class="social-media">
       
        <a href="https://facebook.com">Facebook</a>
        <a href="https://twitter.com">Twitter</a>
        <a href="https://instagram.com">Instagram</a>
    </div>
    <br>
    <p>&copy; 2023 E-Shop. All rights reserved.</p>
</footer>
<footer>
  
</footer>
      </body>
      </html>
    <script src="drop_down.js"></script>
</body>
</html>