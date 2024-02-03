<?php
require_once 'LidhjaMeDatabaze.php';
class LidhjaDB{
  public $db;
  public $conn;
  public $fileName = "";


  public function __construct()
  {
    $this->db = new DataBaza();
    $this->conn = $this->db->getConnection();
    
  }

  public function getHeader(){
    include_once 'header.php';
  }
  public function getFooter(){
    include_once 'footer.php';
  }

  public function setFileName($fileName){
    $this->fileName = $fileName;
  }


  public function startSession(){
    session_start();
  }

  public function checkIfAdmin($fileName){
    $this->startSession();
    if ($_SESSION['isAdmin'] == false){
      header("Location: " . $fileName);
    } 
  }
  public function checkIfLoggedIn($fileName){
    $this->startSession();
    if($_SESSION['isUser'] == false){
      header("Location: ". $fileName);
    }
  }
    

  public function isMethodPost(){
    return $_SERVER['REQUEST_METHOD'] === 'POST'; 
  }

  public function checkForError(){
    error_log("There is something wrong!", 0);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  }

  public function addComma($cmimi){
    $formattedPrice = number_format($cmimi);
    return $formattedPrice;
  }
}

class Upload extends LidhjaDB{
  public $time;
  public $uploadedFiles;
  public $uploadDir;
  

  public function __construct(){
    parent::__construct();
    $this->uploadedFiles = isset($_FILES['files']) ? $_FILES['files'] : null;
  }


  public function insertProduct(){
    $this->time = time();
    $sql = "INSERT INTO produkti VALUES (".$this->time.", '".$_POST['lloji']."','".$_POST['titulli']."', '".$_POST['tekstikryesor']."'
    , '"."parentProductPhotos/". $this->time ."/fotoKryesore.webp"."', '".$_POST['llojiperformances']."', '".$_POST['performanca']."', '".$_POST['garancioni']."'
    , '".$_POST['ngjyra']."', '".$_POST['viti']."','".$_POST['cmimi']."')";
    $this->conn->query($sql);
  }

  public function createFolder(){
    mkdir('parentProductPhotos/' . $this->time);
    $this -> uploadDir = 'parentProductPhotos/' . $this->time . '/'; 
    if (!is_dir($this -> uploadDir)) {
        mkdir($this -> uploadDir, 0777, true);
    }
    $targetFilePath = $this->uploadDir . 'fotoKryesore.webp';
    move_uploaded_file($_FILES["fotoKryesor"]["tmp_name"], $targetFilePath);
  }

  public function insertAll(){
    if ($this -> isMethodPost()){
      $this -> insertProduct();
      $this -> createFolder();
    }
  }

}
class products extends LidhjaDB{
    public function getSmartphones($lloji){
      $sql = "Select * from produkti where lloji = '".$lloji."'";
      $result = $this->conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      
      echo '<div class="img1">
              <a href = "parent.product.php?product='.$row['numriId'].'">
                  <img src="'.$row['fotokryesore'].'" alt="googlepx ">
                  </a>
                  <h3>'.$row['titulli'].'</h3>
                  <p>'.$row['cmimi'].'</p>
                
            </div>';
      }
    }
  }
}
class parentProduct extends LidhjaDB{
  public $row;
  public function getProduct(){
    return isset($_GET['product']) ? $_GET['product'] : null;
  }
  public function getProductInfo(){
    $getProductQuery = 'Select * from produkti where numriId = ' . $this->getProduct();
    $result = $this->conn->query($getProductQuery);
    $this->row = $result->fetch_assoc();
  }


}
class SendMessage extends LidhjaDB {
  public function insertMessage(){
    if ($this->isMethodPost()){
      $sql = "INSERT INTO mesazhi (emri,email,numriTel,mesazhi) VALUES (?, ?, ?, ?)";
      $stmt = $this -> conn -> prepare($sql);

      $teksti = htmlspecialchars($_POST['teksti'], ENT_QUOTES, 'UTF-8');
      $emri = htmlspecialchars($_POST['emri'], ENT_QUOTES, 'UTF-8');
      $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
      $numritel = htmlspecialchars($_POST['numri'], ENT_QUOTES, 'UTF-8');
      
      $stmt -> bind_param("ssss", $emri,$email,$numritel, $teksti);
      $stmt -> execute();
      $stmt -> close();
      echo " <script> alert ('MESAZHI U DERGUA') </script>";
    }
  }
}
class Mesazhet extends LidhjaDB {
  public function showMessages(){
      $sql = 'SELECT * FROM mesazhi';
      $result = $this->conn->query($sql);
      while(($row = $result->fetch_assoc())!= null){
        echo "<tr>";
        echo "<td>".$row['emri']."</input></td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['numriTel']."</td>";
        echo "<td>".$row['mesazhi']."</td>";
        echo "</tr>";
      }
    }
  }
  class Delete extends LidhjaDB {
    public function deleteProduct(){
      $sql = "SELECT * FROM produkti";
      $result = $this->conn->query($sql);

      while (($row = $result->fetch_assoc())!= null) {
        echo "<tr>";
        echo "<td>" . $row['numriId'] . "</td>";
        echo "<td>" . $row['tekstikryesor'] . "</td>";
        echo '<td><a href="deleteScript.php?product=' . $row['numriId'] . '">Delete Now</a></td>';
        echo "</tr>";
    }
  }
  }
  class DeleteScript extends LidhjaDB {
    public function deleteFromDb(){
      if(isset($_GET['product'])){
        $numriId = $_GET['product'];
        $conn = $this->conn;
        
        $sql = "DELETE FROM produkti WHERE numriId = '" . $numriId . "'";
        $conn->query($sql);
        echo '<script>alert("Produkti eshte fshire me sukses");</script>';
      }
  }
}
class register extends LidhjaDB {
  public function register(){
    if (isset($_POST['btnR'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $sql = "insert into account values('".$username."','".$email."','".$password."',0)";
      $conn = $this->conn;
      $conn->query( $sql );
      echo '<h1>Useri u shtua me sukses</h1>';

    }
  } 
}
?>