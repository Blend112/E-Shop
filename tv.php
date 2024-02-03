<?php 
    include 'baseCode.php';
    $obj = new products();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tv,Aksesore</title>
    <link rel="stylesheet" href="combined.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<?php 
    $obj->getHeader();

?>

    
      <div class="tvp">
        <div class="tv">
            <?php
            $obj->getSmartphones("tv");
            ?>
        </div>
      </div>
      
<?php 
    $obj->getFooter();
?>
<script src="drop_down.js"></script>
</body>
</html>