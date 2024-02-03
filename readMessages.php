<?php
include "baseCode.php";
$mesazh = new Mesazhet();
$mesazh -> checkIfAdmin("log-in.php");
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
  max-height: 1700px;
  
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
        <th>Emri</th>
        <th>Email</th>
        <tH>nrTel</tH>
        <th>Mesazhi</th>
    </tr>
    <?php $mesazh -> showMessages();?>
    </table>
  </div>
    
</body>
</html>