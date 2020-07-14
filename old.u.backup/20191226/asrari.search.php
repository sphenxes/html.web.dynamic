
<?php
/*https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php*/
ini_set("display_errors",1);
       error_reporting(E_ALL);

       $servernamelog="localhost:3306";
       $usernamelog="u233929990_log";
       $passwordlog="Hysedclg0204";
       $databaselog="u233929990_log";

       $connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);

/*$servername="sql223.main-hosting.eu:3306";*/
$servername="localhost:3306";
$username="u233929990_log";
$password="Hysedclg0204";
$database="u233929990_log";


$connection = mysqli_connect($servername, $username, $password, $database);

$myTable=$_POST['tableName'];
$myRadioButton=$_POST['radioTitle'];
$mySearchTerm=$_POST['searchterm'];

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
echo "<tr> <th>Home Page </th> <th> email</th> <th> password </th> <th> geneal </th> <th> misc </th> </tr>";


while ($row = mysqli_fetch_array($result))
{


echo "<tr><td>";

echo  "<a href='" .$row['url']. "'>" . $row['homepage'] ."</a>" ;
echo "</td><td>";

#echo "<tr><td>";
echo  $row['email'] . ' ' .'<br />';
echo "</td> <td>";


echo  $row['password'] . ' ' .'<br />';
echo "</td> <td>";

echo  $row['general'] . ' ' .'<br />';
echo "</td> <td>";

echo  $row['misc'] . ' ' .'<br />';
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

<a href= "http://pharmacy.pharmacology.today/asrari.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
