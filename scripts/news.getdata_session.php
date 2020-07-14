<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <body>
  <?php
    //checks if session variables are set or not
    if(isset($_SESSION["name"]) && isset($_SESSION["email"])){
      // Echo session variables that were set on previous page
      echo "Name is " . $_SESSION["name"] ".<br>";
      echo "Email is " . $_SESSION["email"]  ".";
    }
  ?>
  </body>
</html>
