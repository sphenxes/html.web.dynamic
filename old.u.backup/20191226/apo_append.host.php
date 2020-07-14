

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
$servername="194.5.156.25:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";


$connection = mysqli_connect($servername, $username, $password, $database);

//http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

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
#echo "Error" . $error ."<br>";


$query = "Update 'heilpflanze' SET 'use' = case when 'use' is null
or 'use' = ''
then 'test'  where 'plan' like 'anis' END ";


//$query = "Update {$myTable} SET {$myColumn} = Concat( {$myColumn},  ' - ' , ' $myNewValue')  where {$myColumn} like  '%$mySearch%' ";
#$query = "Update {$myTable} SET {$myAppendColumn} = Concat( {$myAppendColumn},  ' - ' , ' $myNewValue') where {$myMainColumn} like  '%$mySearch%'";

#$query = "Update {$myTable} SET {$myAppendColumn} = case when {$myAppendColumn} is null
#or {$myAppendColumn} = ''
#then {$myNewValue} where 'plant' like 'anis' ";

#else
#Concat( {$myAppendColumn},  ' - ' , ' $myNewValue') where {$myMainColumn} like  '%$mySearch%' ";

/*
update tabname
 set colname= case when colname is null or colname =''
              then 'newString'
              else concat(colname,'newString')
              end
'*/


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);


?>
<br>
<br>
<br>
<a href="http://localhost/apo_append.host.html"> Click Here to Return to Home  </a>

</body>


</html>
