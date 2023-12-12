<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <title>SCodeWebsite</title>
  </head>
  <body>

    
    <?php if (isset($user)): ?>
        <header>
      <a href="#" class="logo"><span>SCodeWebsite</span></a>

      <h1>SCodeWebsite</h1>

      <ul class="navbar">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <div class="main">
        <a href="logout.php" class="user"><i class="ri-logout-box-r-line"></i>LogOut</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <?php else: ?>
        <header>
      <a href="#" class="logo"><span>SCodeWebsite</span></a>

      <h1>SCodeWebsite</h1>

      <ul class="navbar">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <div class="main">
        <a href="login.php" class="user"><i class="ri-user-fill"></i>LogIn</a>
        <a href="signup.html">SignUp</a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <?php endif; ?>

    
</body>
<script src="script.js"></script> 
</html>
    
    
    
    
    
    