<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);


$servername="localhost:3306";
$username="u233929990_log";
$password="Hysedchstngr0204";
$database="u233929990_log";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "hi";

// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM user_login WHERE username='$username' and Password='$password'";

/*
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
*/

echo "hello";

$result = mysqli_query($connection, $query) or die('Connection Error');
mysqli_close($connection);

?>
