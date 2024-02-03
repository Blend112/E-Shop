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
    <style>
      body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: orange;

      }
      form{
        display: flex;
        max-width: 800px;
        width: 100%;
        flex-direction: column;
        height: 95vh;
        gap: 5px;
        overflow-x:clip ;
        
      
      }
      input{
        max-width: 97.5%;
        width: 100%;
        height: 60px;
        border: none;
        border-radius:20px ;  
        padding-left:10px ;
        
      }
      select{
        max-width: 99%;
        width: 100%;
        height: 60px;
        border: none;
        border-radius: 20px;
        
        
      }
      button{
        max-width: 49%;
        width: 100%;
        border: none;
        border-radius: 20px;



      }
      #butonat{
        display: flex;
        justify-content: space-between;
        max-width: 100%;
        height: 60px;
        
        
      }
      a{
        max-width: 49%;
        width: 100%;
        height: 100%;
      }
      a button{
        max-width: 100%;
        width: 100%;
        height: 100%;
      }
      fieldset{
        background-color: white;
        border: none;
        border-radius: 20px;
        
      }
      legend{
        background-color: transparent;
      }



    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="form-group">
      <input type="text" name="lloji" placeholder="Lloji" required>
    </div>
    <div class="form-group">
      <input type="text" name="titulli"  placeholder="Titulli" required>
    </div>
    
    <div class="form-group">
      <input type="text" name="tekstikryesor" placeholder="Teksti Kryesore" required>
    </div>

    <div class="form-group">
      <input type="text" name="llojiperformances" placeholder="Lloji Performances" required>
    </div>

    <div class="form-group">
      <input type="text" name="performanca" placeholder="Performanca" required>
    </div>

    <div class="form-group">
        <select name="lloji" id="lloji">
            <option value="Tv">Tv,Aksesore </option>
            <option value="Smartphone">Smartphone</option>
            <option value="Gaming">Gaming</option>
        </select>   
    </div>

    <div class="form-group">
      <input type="text" name="garancioni" placeholder="Garancioni" required>
    </div>



    <div class="form-group">
      <input type="text" name="ngjyra" placeholder="Ngjyra" required>
    </div>

    <div class="form-group">
      <input type="number" name="viti" placeholder="Viti" required>
    </div>
    <div class="form-group">
      <input type="text" name="cmimi" placeholder="Cmimi" required>
    </div>


    <div class="form-group">
      <fieldset class = "fieldFoto">
          <legend>Fotoja :</legend>
          <input class="inputFoto" type="file" name="fotoKryesor" required>
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