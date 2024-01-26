<?php
  class SessionKill{
    public static function killSessions(){
      session_start(); 
      session_unset(); 
      session_destroy();
    }
    public static function relocate($location){
      header("Location: " . $location);
    }
  }
  SessionKill::killSessions();
  SessionKill::relocate("index.php");

?>