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
?>