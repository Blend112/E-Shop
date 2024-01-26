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


  public function insertCar(){
    $this->time = time();
    $sql = "INSERT INTO produkti VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $this -> conn -> prepare($sql);
    $stmt -> bind_param("isssssssss", $this->time, $_POST['Prodhuesi'], $_POST['vitiProdhimit'], $_POST['kilometrat'],
      $_POST['MadhesiaMotorrit'],$_POST['llojiKariserise'], $_POST['llojiShpejtesis'], $_POST['meCilatNgreh'],
      $_POST['modeli'],$_POST['karburanti'],$_POST['ps'],$_POST['Dogan'],$_POST['Regjistrim']);
    $stmt -> execute();
    $stmt -> close();
  }

  public function createFolder(){
    mkdir('productPhotos/' . $this->time);
    $this -> uploadDir = 'productPhotos/' . $this->time . '/'; 
    if (!is_dir($this -> uploadDir)) {
        mkdir($this -> uploadDir, 0777, true);
    }
    $targetFilePath = $this->uploadDir . 'fotoKryesore.webp';
    move_uploaded_file($_FILES["fotoKryesor"]["tmp_name"], $targetFilePath);
  }

  public function insertAll(){
    if ($this -> isMethodPost()){
      $this -> insertCar();
      $this -> createFolder();
    }
  }

}
?>