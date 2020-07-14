
<?php
/*https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php*/

ini_set("display_errors",1);
       error_reporting(E_ALL);


$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="Herbs";


/*$servername="sql223.main-hosting.eu:3306";
$servername="194.5.156.22:3306";*/
/*
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";
*/

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
echo "<tr> <th>Plant</th> <th> Botanic</th> <th> Arzneibuch</th> </tr>";

while ($row = mysqli_fetch_array($result))
{

echo "<tr><td>";
echo  "<a href='" .$row['plant']. "'>" . $row['plant] ."</a>" ;
#echo  $row['source'] . '' .'<br />';
echo "</td><td>";

#echo "<tr><td>";
echo  $row['botanic'] . ' ' .'<br />';
echo "</td> <td>";

echo  $row['arzneibuch'] . ' ' .'<br />';
echo "</td> <td>";

}

echo "</table>";

?>

<html>
<br>
<br>
<br>
<p>

<a href= "http://localhost/apo_search.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
