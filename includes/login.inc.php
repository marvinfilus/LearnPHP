<?php

if(isset($_POST['login-submit']) ){

  require "dbh.inc.php";

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if (empty($mailuid) || empty($password) ){
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUser=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql) ){
      header("Location: ../index.php?error=sqlthree");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $results = mysqli_stmt_get_result($stmt);
      if($row =  mysqli_fetch_assoc($results)){
        $pwdcheck = password_verify($password, $row['pwdUsers']);
        if($pwdcheck == false){
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }
        else if ($pwdcheck == true){
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['uidUsers'] = $row['uidUsers'];

          header("Location: ../index.php?loggedin=success");
          exit();
        }
        else{
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }
      }
      else{
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }

}
else {
  header("Location: ../index.php");
  exit();
}
