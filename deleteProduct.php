<?php 
  include "baseCode.php"; 
  $del = new Delete();
  $del->checkIfAdmin("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="tableDiv">
    <table>
      <tr>
        <th>ID produktit</th>
        <th>Emri</th>
        <th>Delete</th>
      </tr>
      <?php 
        $del -> deleteCar();
      ?>
    </table>
  </div>
</body>
</html>