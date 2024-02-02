<?php 
  include 'baseCode.php';
  $obj = new LidhjaDB();
  $obj -> checkIfAdmin("log-in.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="combined.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <title>Document</title>
</head>
<body>
  <?php include 'header.php' ?>
  <div class="buttonBody">
    <?php
      echo '<h1 style ="color: white; margin-top:10px;"> Mire se vini ' . $_SESSION['username'] . '</h1>';
    ?>
      <div class="buttons">
        <button class="hrefButton" onclick="insertProduct()">Shto Produktin</button>
        <button class="hrefButton" onclick="deleteProduct()">Fshij Produktin</button>
        <button class="hrefButton" onclick="lexoMesazhet()">Lexo Mesazhet</button>
      </div>
  </div>
  




  <script>
    function insertProduct(){
      window.location.href = "insertProductToDatabase.php"
    }
    function deleteProduct(){
      window.location.href = "deleteProduct.php"
    }
    function lexoMesazhet(){
      window.location.href = "readMessages.php"
    }

  </script>
</body>

</html>