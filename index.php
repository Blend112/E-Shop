<?php 
    include 'baseCode.php';
    $obj = new LidhjaDB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop</title>
    <link rel="stylesheet" href="stiliperindex.css">
    <link rel="stylesheet" href="combined.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body onload="nddroFoton()">
<?php 
    $obj->getHeader();

?>

<div class="row">
              <img src="" alt="Our thing" id="fotoSlider">
              <button id="sliderbutton" onclick="nddroFoton()">NEXT</button>
         </div>
<script>
    let i = 0;
    let fotot = ["fotot per projekt/slider/slider 1.webp","fotot per projekt/slider/slider 2.webp","fotot per projekt/slider/slider 3.webp","fotot per projekt/slider/slider 4.webp"]
    function nddroFoton(){
       document.getElementById("fotoSlider").src=fotot[i];

        if(i< fotot.length -1){
            i++;
        }else{
            i=0;
        }

    }
    setInterval("nddroFoton()", 2353)
</script>


<section class="category-overview">
    <div class="category" id="tv-accessories">
        <img src="fotot per projekt\tv,aksesore\telekomand 1.webp" alt="TV Accessories">
        <div class="category-info">
            <h2>TV Accessories</h2>
            <p>Description of TV Accessories</p>
            <a href="tv.php">Shop Now</a> 
        </div>
    </div>
    
    <div class="category" id="gaming">
        <img src="fotot per projekt\gaming\pc2.webp" alt="Gaming">
        <div class="category-info">
            <h2>Gaming</h2>
            <p>Description of Gaming Products</p>
            <a href="gaming.php">Shop Now</a> 
        </div>
    </div>

    <div class="category" id="smartphones">
        <img src="fotot per projekt\smartphones\iphone 15 plus.webp" alt="Smartphones">
        <div class="category-info">
            <h2>Iphone 15 Plus</h2>
            <p>264GB, 1 Year Warranty, +Case</p>
            <a href="smartphones.php">Shop Now</a>
        </div>
    </div>
</section>


</section>
<?php 
    $obj->getFooter();
?>
<script src="drop_down.js">

</script>
</body>
</html>
