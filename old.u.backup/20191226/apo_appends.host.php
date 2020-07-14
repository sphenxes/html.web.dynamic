

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
  $myCorrection=$_POST['correction'];




echo "Table Name:" . $myTable ."<br>";
echo "Main Column:" . $myMainColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
echo "Append Column:" . $myAppendColumn ."<br>";
echo "Append to text:" . $myNewValue ."<br>";
echo "You have choosen:" . $myCorrection ."<br>";

#if  ('$myCorrection' == 'correct')
if(strstr($myCorrection, "correct") != false)
{
$query = "update {$myTable}
set {$myAppendColumn} = '{$myNewValue} '
where {$myMainColumn} like '{$mySearch}%'";
echo "You have choosed Correcting the record";
}
else
{
$query = "update {$myTable}
set {$myAppendColumn} = case when {$myAppendColumn} is null
then '{$myNewValue} '
else concat ({$myAppendColumn}, '- {$myNewValue}')
End
where {$myMainColumn} like '{$mySearch}%'";
echo "You have choosed appending text to record";
}


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);


?>
<br>
<br>
<br>
<a href="http://apo.marei.info/apo.host.html"> Click Here to Return to Home  </a>

</body>


</html>
