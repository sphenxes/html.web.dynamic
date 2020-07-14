
<?php
/*https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php*/
ini_set("display_errors",1);
       error_reporting(E_ALL);

$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
//$database="impfung";
$database="impfung";


$connection = mysqli_connect($servername, $username, $password, $database);

#$query = "SELECT * FROM Politics where title like '%Navy%'";

#$query = "SELECT * FROM TradeMark where (tradename or company or disease)  like '%search%'";
#$query = "SELECT * FROM TradeMark where tradename like 'test'";
$query = "SELECT * FROM TradeMark where tradename like 'test'";

mysqli_query($connection, $query) or die('Error querying database.');
$result = mysqli_query($connection, $query);


//$row = mysqli_fetch_array($result));
//echo $row;

while ($row = mysqli_fetch_array($result))
{
 #echo $row['first_name'] . ' ' . $row['last_name'] . ': ' . $row['email'] . ' ' . $row['city'] .'<br />';

// $myTradeMark[]= $row['tradename'];
#echo  $row['tradename'] . ' '  .'<br />';
echo  $row['tradename'] . ' ' .'<br />';
echo  $row['company'] . '' .'<br />';
echo ''. '</br>';
echo '' . '</br>';



}
?>
