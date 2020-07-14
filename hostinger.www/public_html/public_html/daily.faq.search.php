
<?php
/*https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php*/
ini_set("display_errors",1);
       error_reporting(E_ALL);

//include 'filesLogic.php';

$servernamelog="localhost:3306";
$usernamelog="u233929990_log";
$passwordlog="Hysedclg0204";
$databaselog="u233929990_log";

$connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);


$servername="sql223.main-hosting.eu:3306";
$username="u233929990_faq";
$password="Hysedcfq0204";
$database="u233929990_faq";


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


mysqli_query($connection, $query) or die('Error querying database.');
$result = mysqli_query($connection, $query);

echo "<table border='1'>";
echo "<tr>  <th> Question</th> <th> Answer</th> </tr> <th>Uses </th>";

while ($row = mysqli_fetch_array($result))
{


/*
echo "<tr>";
echo "<td>" .$row['question'] . "</td>";


echo "<td>" .$row['answer'] . "</td>";

echo "<td>" .$row['question'] . "</td>";
echo "</tr>";
*/

?>
<tr>
<td><?php echo $row['question'];?></td>
<td><?php echo $row['answer'];?></td>
<td><?php echo $row['source']; ?></td>
</tr>
<?php
}

echo "</table>";


//header('Refresh: 300; URL=http://pharmacy.marei.info/vaccine.html');

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

<a href= "https://pharmacy.pharmacology.today/daily.faq.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
