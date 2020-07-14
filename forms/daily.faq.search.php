
<?php
/*https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php*/
ini_set("display_errors",1);
       error_reporting(E_ALL);

include 'filesLogic.php';

$servername="sql223.main-hosting.eu:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";


$connection = mysqli_connect($servername, $username, $password, $database);

$myTable=$_POST['tableName'];
$mySearchTerm=$_POST['searchterm'];
$myRadioButton=$_POST['radioTitle'];

$query = "SELECT * FROM {$myTable}
where ({$myRadioButton} like '%{$mySearchTerm}%' ) ";


mysqli_query($connection, $query) or die('Error querying database.');
$result = mysqli_query($connection, $query);

echo "<table border='1'>";
echo "<tr> <th>Clinical </th> <th> Trade Mark</th> <th> Company</th> </tr>";

while ($row = mysqli_fetch_array($result))
{


echo "<tr><td>";
echo  "<a href='" .$row['clinical']. "'>" . $row['trademark'] ."</a>" ;
#echo  $row['source'] . '' .'<br />';
echo "</td><td>";

#echo "<tr><td>";
echo  $row['clinical'] . ' ' .'<br />';
echo "</td> <td>";

echo  $row['trademark'] . ' ' .'<br />';
echo "</td> <td>";

}

echo "</table>";


header('Refresh: 300; URL=http://pharmacy.marei.info/vaccine.html');

?>



<html>
<br>
<br>
<br>
<p>

<a href= "http://pharmacy.marei.info/vaccine.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
