<?php
  class DataBaza {
    public $host = 'localhost';
    public $username = 'root';
    public $password = '';
    public $database = 'eshop';
    public $mysqli;

    public function connectToDatabase(){
      $this->mysqli = new mysqli($this->host, $this->username,$this->password, $this->database);
      if ($this->mysqli -> connect_errno) {
        die("Connection error: " . $this->mysqli -> connect_error);
      }
    }

    public function getConnection(){
      $this->connectToDatabase();
      return $this->mysqli;
    }
  }
?>