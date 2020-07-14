

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


<a href="http://localhost/apo_append.host.html"> Click Here to Return to Home  </a>
#$servername="localhost:3306";
$servername="194.5.156.25:3306";
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
set {$myAppendColumn} = case when {$myAppendColumn} is null
then 'nullappendcolumn'
else concat ({$myAppendColumn}, '- {$myNewValue}')
End
where {$myMainColumn} like '{$mySearch}%'";

$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);


?>
<br>
<br>
<br>
<a href="http://localhost/apo_append.host.html"> Click Here to Return to Home  </a>

</body>


</html>
