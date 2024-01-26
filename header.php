<?php 
    echo '
    <div class="div-ul">
        <div class="ul2">
        <div class="image">
            <img src="fotot per projekt/logot/logo.png" alt="logo" class="logoImg">
        </div>

    
        <div class="teksti">
            <ul>
                <li id="links"><a href="index.php">Home</a>
                    <li id="links"><a href="tv.php">TV Accessories</a>
                    <li id="links"><a href="smartphones.php">Smartphones</a></li>
                    <li id="links"><a href="gaming.php">Gaming</a></li>
                    <li id="links"><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="search-bar">
          <input type="text" placeholder="Search...">
          <a href="login.php" class="user-button"><img src="fotot per projekt/logot/user.png" style="max-width: 25px; margin-top: 5px;" alt=""></a>
      </div>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"><span class="material-symbols-outlined">menu</span></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="index.php">Home</a>
            <a href="tv.php">TV Accessories</a>
            <a href="smartphones.php">Smartphones</a>
            <a href="gaming.php">Gaming</a>
            <a href="contactus.php">Contact Us</a>
        </div>
      </div>
      </div>
    </div>'

?>