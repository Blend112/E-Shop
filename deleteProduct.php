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
    <style>

      table{
        max-width: 95%;
        margin-inline: auto;
        height: 1700px;
        
      }
      td{
        max-width: 1200px;
        margin: 20px;
        border: 1px solid black;
      }

      th{
        border: 1px solid black;
      }
    </style>

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
        $del -> deleteProduct();
      ?>
    </table>
  </div>
</body>
</html>