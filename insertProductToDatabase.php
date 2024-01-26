<?php 
  include "baseCode.php";
  $bc = new Upload();
  $bc -> checkIfAdmin("index.php");
  $bc -> checkForError();
  $bc -> insertAll();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <!-- <p>Numri Identifikues: <br>
    <input type="number" name="nrShasise"></p> -->

    <div class="form-group">
      <label for="modeli">lloji :</label>
      <input type="text" name="lloji" required>
    </div>
    <div class="form-group">
      <label for="kilometrat">titulli :</label>
      <input type="text" name="titulli" required>
    </div>
    
    <div class="form-group">
      <label for="MadhesiaMotorrit">tekstikryesor :</label>
      <input type="text" name="tekstikryesor" required>
    </div>

    <div class="form-group">
      <label for="llojiKariserise">llojiperformances :</label>
      <input type="text" name="llojiperformances" required>
    </div>

    <div class="form-group">
      <label for="karburanti">performanca :</label>
      <input type="text" name="performanca" required>
    </div>

    <div class="form-group">
      <label for="llojiKariserise">lloji :</label>
        <select name="lloji" id="lloji">
            <option value="Tv">Tv</option>
            <option value="Smartphone">Smartphone</option>
            <option value="Gaming">Gaming</option>
        </select>   
    </div>

    <div class="form-group">
      <label for="garancioni">garancioni :</label>
      <input type="text" name="garancioni" required>
    </div>



    <div class="form-group">
      <label for="ps">ngjyra :</label>
      <input type="text" name="ngjyra" required>
    </div>

    <div class="form-group">
      <label for="cmimi">viti :</label>
      <input type="number" name="viti" required>
    </div>


    <div class="form-group">
      <fieldset class = "fieldFoto">
          <legend>Fotoja :</legend>
          <input class="inputFoto" type="file" name="fotokryesore" required>
      </fieldset>
    </div><br>
    
    <div class="form-group">
      <div id="butonat">
        <a href="dashboard.php">
          <button type="button" name="index">Kthehu në Dashboard</button>
        </a>
        <button type="submit" name="upload">Shto Produktin</button>
      </div>
    </div>
    
	</form>

</body>
</html>