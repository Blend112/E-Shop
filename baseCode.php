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
    public function getSmartphones(){
      $sql = "Select * from produkti where lloji = 'Smartphone'";
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
?>