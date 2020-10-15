<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Marvin Filus </title>
    <link href="/style.css" media="screen" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <header class="top-header">

      <nav class="nav-header-main">
        <a href="#">
          <img src="/img/profilepic copy.jpg" width="50px"alt="">
        </a>
        <ul class="ul-nav-header-main">
          <li><a href ="index.php">Home </a></li>
          <li><a href ="#">Portfolio</a></li>
          <li><a href ="#">Settings  </a></li>
          <li><a href ="#">Log out  </a></li>
        </ul>
      <?php
      if(isset($_SESSION['userId']) ){
        echo '  <form class="logout-form" action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit"> Log out </button>
        </form>  ';
      }
      else {
        echo ' <div class="div-form-main">
          <form class="login-form" action="includes/login.inc.php" method="post">
            <input class="input-login-form"type="text" name="mailuid" placeholder="Username/Email...">
            <input class="input-login-form pwd-login-input"type="text" name="pwd" placeholder="password">
            <button type="submit" name="login-submit"> Login </button>
          </form>
          <a href="signup.php">Sign Up </a>

        </div>  ';
      }
      ?>
      </nav>
    </header>
