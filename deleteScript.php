<?php 
  include 'baseCode.php';
  $delScript = new DeleteScript();
  $delScript -> checkIfAdmin("index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  
    <title>Fshije Automjetin</title>
</head>
<body>
  <h1>Duke fshirë Produktin:</h1>
  <?php 
    $delScript -> deleteFromDb();
  ?>
  
  <a href="deleteProduct.php"><button>Fshijë një produkt tjetër</button></a>
  <a href="index.php"> <button>Kthehu në Ballinë</button></a>
</body>
</html>