<?php
  require "header.php"
?>
  <main>
    <div class=signup-container>
      <h1>Sign Up </h1>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error'] == "emptyfields"){
            echo ' <p class="signup-error">Fill in all fields!  </p> ';
          }
          else if ($_GET['error'] == "usertaken") {
            echo ' <p class="signup-error">User Id Taken! </p> ';
          }
          else if ($_GET['error'] == "invalidmail") {
            echo ' <p class="signup-error">Email Address is invalid! </p> ';
          }
          else if ($_GET['error'] == "passwordcheck") {
            echo ' <p class="signupError"> Passwords dont match! </p> ';
          }
        }
        else if (isset($_GET['signup']) == "success") {
                echo ' <p class="signupError"> You are signed up! </p> ';
        }
      ?>
      <form class="signup-form" action="includes/signup.inc.php" method="post">
        <p> Username</p>
        <input type="text" name="uid" placeholder=" username">
        <p>Email</p>
        <input type="text" name="email" placeholder=" email">
        <p>Password</p>
        <input type="password" name="pwd" placeholder=" Password ">
        <p>Repeat password</p>
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button type="submit" name="signup-submit"> Sign up </button>
      </form>
    </div>
  </main>
<?php
  require "footer.php";
?>
