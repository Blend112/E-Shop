<?php 
  include 'baseCode.php';

  class Validate extends LidhjaDB{ 
    private $pass;
    private $isAdmin;
    private $email;
public function logIn(){
      if (isset($_POST['btnL'])){
        $sql = "SELECT pass, isAdmin,email FROM Account WHERE emri = ?";
        $stmt = $this->conn -> prepare($sql);
        $stmt -> bind_param("s", $_POST['usernameL']);
        $stmt -> execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
          $stmt->bind_result($this->pass, $this->isAdmin,$this->email);
          $stmt->fetch();
          $row = [
            'pass' => $this->pass,
            'isAdmin' => $this->isAdmin,
            'email' => $this->email
          ];
    
          if ($_POST['passwordL'] === $this->pass){
            session_start();
            $_SESSION['isAdmin'] = $this->isAdmin;
            $_SESSION['isUser'] = true;
            $_SESSION['email'] = $this->email;
            $_SESSION['username'] = $_POST['usernameL'];
            echo "<script>alert('Jeni qasur me sukses')</script>";
    
          }else {
            echo "<script>alert('Keni shtypur fjalekalimin gabim')</script>";
          }
          
        }else {
          echo "<script>alert('Ky perdorues nuk ekziston')</script>";
        }
      }

    }
    public function adminButtons(){
        if(session_status() !== PHP_SESSION_ACTIVE ){
          session_start();
        }
  
        if (isset($_SESSION['isAdmin'])){
          if ($_SESSION['isAdmin'] == true){
            echo '<button class="other-btn" onclick = "degoTeDashboard()">Dashboard</button>';
          }
            echo '<button class="other-btn" onclick = "redirectToMessage()">Dërgo Mesazh</button>';
        }
        if(sizeof($_SESSION) != 0){
          echo '<style> .paralogin{display: none;} </style>';
        //   echo '<style> .rememberMe,#loginForm{display: none; visibility: hidden; width:0px; height:0px;} </style>';
          echo "<a href ='logout.php' style=' text-decoration: none;'><button class=\"other-btn\">Log Out</button></a>";
        }else{
          echo '<style> .log-in{height:480px;}</style>';
        }
      }
    
}

    ?>