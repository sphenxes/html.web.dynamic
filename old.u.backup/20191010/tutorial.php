<head>

  <title>Medicinal Herbs Table Latin Names</title>
</head>
<body>

<?php


ini_set("display_errors",1);
       error_reporting(E_ALL);

#echo 'Hi';


$servername="localhost:3306";
$username="tutorial";
$password="Hysedcttrl0204";
$database="tutorial";

#echo 'Hello';
#$connection = mysqli_connect($servername, $username, $password,'');


$connection = mysqli_connect($servername, $username, $password, $database);

/*
if (!$connection) {
  die('Could not connect: ' . mysql_error("First Error"));

  }

if (!mysqli_select_db($connection, 'tutorial')) {
echo 'Database is not Selected';
  }
 */


#echo "ok";


#$id = $_POST['idPlants'];
$mytable=$_POST['mytables'];
$plant = $_POST['plantsName'];
$mycomment = $_POST['comments'];

#echo "id" . $id . "<br>";

echo "MyTables:" . $mytable ."<br>";
echo "Plant Name:" . $plant . "<br>";
echo "Comments:" . $mycomment ."<br>";



#$query = "INSERT INTO plants (plantsName, comments) VALUES ('$plant', '$mycomment')";
#$query = mysqli_query("INSERT INTO '$mytable' (plantsName, comments) VALUES ('$plant', '$mycomment')") or die('No Connection');
$query = "INSERT INTO {$mytable} (plantsName, comments) VALUES ('$plant', '$mycomment')";


#$query = "INSERT INTO plants (plantsName, comments) VALUES ($_POST['plantsName'], $_POST['comments'])";


$result = mysqli_query($connection, $query) or die('Connection Error');
mysqli_close($connection);

#echo "sleep";

#<a href= "http://localhost/tutorial.html"> Click Here to Return to Home  </a>
#sleep(30);

#header(Location:http://localhost/tutorial.html");
header('Refresh: 3; URL=http://localhost/tutorial.html');


?>


<a href= "http://localhost/tutorial.html"> Click Here to Return to Home  </a>



</body>


</html>
