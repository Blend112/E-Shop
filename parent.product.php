<?php 
    include 'baseCode.php';
    $obj = new parentProduct();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Product</title>
    <link rel="stylesheet" href="parentProduct.css">
    <link rel="stylesheet" href="combined.css">
    <link rel="stylesheet" href="navbar.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>


<body>

    <?php 
    $obj->getHeader();
    $obj->getProductInfo();

?>
    <div class="containerParent">
    <div class="container">
        <div class="fotoja">
            <img id="img" src="<?=$obj->row['fotokryesore']?>" alt="kufje">

        </div>
        <div class="tedhenat">
            <h1><?=$obj->row['titulli']?></h1>
            <p><?=$obj->row['tekstikryesor']?></p>
            <h2><?=$obj->row['cmimi']?></h2>
            <a href=""></a>

        </div>
        
    </div>
    <div class="tabela">
        <table>
            <tr class="tableRow">
                <td><?=$obj->row['llojiperformances']?></td>
                <td><?=$obj->row['performanca']?></td>
            </tr>
            <tr class="tableRow">
                <td>Garancioni</td>
                <td><?=$obj->row['garancioni']?></td>
            </tr>
            <tr class="tableRow">
                <td>Ngjyra</td>
                <td><?=$obj->row['ngjyra']?></td>
            </tr>
            <tr class="tableRow">
                <td>Viti</td>
                <td><?=$obj->row['viti']?></td>
            </tr>
        </table>
    </div>
</div>
<script src="drop_down.js"></script>
</body>
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

</html>