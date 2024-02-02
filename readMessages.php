<?php
include "baseCode.php";
$mesazh = new Mesazhet();
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