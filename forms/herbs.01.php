<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

echo 'Hi';




$servername="localhost:3306";
$username="tutorial";
$password="Hysedcttrl0204";
#$database="Herbs";

echo 'Hello';


$connection = mysqli_connect($servername, $username, $password);
#$connection = myqli_connect($servername, $username, $password, $database);

if (!$connection) {
  die('Could not connect: ' . mysql_error());

}

echo "ok";
/*
*/



$LatinName = $_POST['Latin_Name'];
$AustrianName = $_POST['Austrian_Name'];
$Comments = $_POST['Comments_Medicinal'];

echo "Latin Name:" . $LatinName . "<br>";
echo "Austrian Name:" . $AustrianName ."<br>";
echo "Comments:" . $Comments ."<br>";

#require('connection.php');
echo "bye";

?>

