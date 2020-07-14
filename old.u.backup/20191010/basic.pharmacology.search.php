
<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

#$servername="sql223.main-hosting.eu:3306";
#$servername="194.5.156.25:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";


$connection = mysqli_connect($servername, $username, $password, $database);

$myTable=$_POST['tableName'];
$mySearchTerm=$_POST['searchterm'];
$myRadioButton=$_POST['radioTitle'];

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

?>

<html>
<br>
<br>
<br>
<p>

<a href= "http://pharmacy.marei.info/basic.pharmacology.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
