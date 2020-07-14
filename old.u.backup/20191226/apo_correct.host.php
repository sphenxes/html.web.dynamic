

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


#$servername="localhost:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";


$connection = mysqli_connect($servername, $username, $password, $database);



echo "--------------------" ."<br>";

  $myTable=$_POST['tableName'];
  $myMainColumn=$_POST['mainColumn'];
  $mySearch=($_POST['search']);
  $myAppendColumn=$_POST['appendColumn'];
  $myNewValue=$_POST['newvalue'];



echo "Table Name:" . $myTable ."<br>";
echo "Main Column:" . $myMainColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
echo "Append Column:" . $myAppendColumn ."<br>";
echo "Append to text:" . $myNewValue ."<br>";



$query = "update {$myTable}
set {$myAppendColumn} = '{$myNewValue} '
where {$myMainColumn} like '{$mySearch}%'";


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);


?>
<br>
<br>
<br>
<a href="http://apo.marei.info/apo_correct.host.html"> Click Here to Return to Home  </a>

</body>


</html>
