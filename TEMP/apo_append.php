

<head>
<title>heilpflanze</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

$error="";
$mySearch="";
$myTable="";
$myColumn="";
$myNewValue="";
$correct="";

ini_set("display_errors",1);
       error_reporting(E_ALL);

/*
$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="Herbs";
*/

//$servername="sql223.main-hosting.eu:3306";

$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";


/*$servername="sql223.main-hosting.eu:3306";*/
/*$servername="localhost:3306";
$username="u233929990_impf";
$password="Hysedchstngr0204";
$database="u233929990_impf";
*/

$connection = mysqli_connect($servername, $username, $password, $database);

//http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

echo "--------------------" ."<br>";

if (!empty($_POST['search']) AND !empty($_POST['newvalue']) AND !empty($_POST['column'])) {
  $mySearch=($_POST['search']);
  $myTable=$_POST['tableName'];
  $myColumn=$_POST['column'];
  $myNewValue=$_POST['newvalue'];

}

echo "Table Name:" . $myTable ."<br>";
echo "column:" . $myColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
echo "Append to text:" . $myNewValue ."<br>";
#echo "Error" . $error ."<br>";

//$query = "Update {$myTable} SET uses = Concat( 'uses', ' - $myNewValue') where idherb = 114";

$query = "Update {$myTable} SET {$myColumn} = Concat( {$myColumn},  ' - ' , ' $myNewValue')  where {$myColumn} like  '%$mySearch%' ";

$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);


?>
<br>
<br>
<br>
<a href="http://localhost/apo_append.html"> Click Here to Return to Home  </a>

</body>


</html>
