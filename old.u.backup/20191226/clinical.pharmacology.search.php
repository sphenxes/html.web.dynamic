
<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);


       $servernamelog="localhost:3306";
       $usernamelog="u233929990_log";
       $passwordlog="Hysedclg0204";
       $databaselog="u233929990_log";

       $connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);

#$servername="sql223.main-hosting.eu:3306";
#$servername="194.5.156.25:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedcp0204";
$database="u233929990_apo";


$connection = mysqli_connect($servername, $username, $password, $database);

$myTable=$_POST['tableName'];
$mySearchTerm=$_POST['searchterm'];
$myRadioButton=$_POST['radioTitle'];

$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "SELECT * FROM {$myTable}
where ({$myRadioButton} like '%{$mySearchTerm}%' ) ";

//echo $query;

mysqli_query($connection, $query) or die('Error querying database.');
$result = mysqli_query($connection, $query);

echo "<table border='1'>";
echo "<tr> <th>Anatomy </th> <th> Medicine</th> <th> ATC</th> </tr>";

while ($row = mysqli_fetch_array($result))
{

echo "<tr><td>";
echo  $row['firstlevel'] . ' ' .'<br />';
#echo  "<a href='" .$row['spice']. "'>" . $row['spice'] ."</a>" ;
#echo  $row['source'] . '' .'<br />';
echo "</td><td>";

#echo "<tr><td>";
echo  $row['secondlevel'] . ' ' .'<br />';
echo "</td> <td>";

echo  $row['atc'] . ' ' .'<br />';
echo "</td> <td>";

}

echo "</table>";

}

else{
  echo "bye";
}


?>

<html>
<br>
<br>
<br>
<p>

<a href= "http://pharmacy.pharmacology.today/clinical.pharmacology.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
