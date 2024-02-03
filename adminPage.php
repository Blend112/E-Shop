<?php 
  include 'loginValidim.php';
  $obj = new Validate();
  $obj ->logIn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           display:flex;
           justify-content: center;
           align-items: center;
        }
        .other-btn{
            width: 250px;
            height: 75px;
            border:none ;
            border-radius: 20px;
            background-color:hsl(39, 100%, 50%);
            color: aliceblue;
            font-size: 18px;
            margin-left: 25px ;
        }
    </style>
</head>
<body>
    <div class="other-buttons-div">
      <?php $obj->adminButtons();?> 

    </div>
    <script>
    function degoTeDashboard(){
    window.location.href = "dashboard.php"
  }
  </script>

</body>
</html>