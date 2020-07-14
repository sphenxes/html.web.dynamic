
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
$username="u233929990_hesh";
$password="Hysedcnws0204";
$database="u233929990_news";


$connection = mysqli_connect($servername, $username, $password, $database);

$myTable=$_POST['tableName'];
$mySearchTerm=$_POST['searchterm'];
$myRadioButton=$_POST['radioTitle'];
$myDataSearch['radiosearch']
$myFirstDatum=['firstdatum']
$mySecondDatum=['seconddatum']


$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

if ($myDateSearch !== "datesearch"){

$query = "SELECT * FROM {$myTable}
where ({$myRadioButton} like '%{$mySearchTerm}%' ) ";

mysqli_query($connection, $query) or die('Error querying database.');
$result = mysqli_query($connection, $query);

echo "<table border='1'>";
echo "<tr> <th>Title </th> <th> Summary</th> <th> Subject</th> </tr>";

while ($row = mysqli_fetch_array($result))
{


echo "<tr><td>";
echo  "<a href='" .$row['source']. "'>" . $row['title'] ."</a>" ;

echo "</td><td>";

#echo "<tr><td>";
echo  $row['summary'] . ' ' .'<br />';
echo "</td> <td>";

echo  $row['subject'] . ' ' .'<br />';
echo "</td> <td>";

}

echo "</table>";

}

else {

  $query = "SELECT * FROM {$myTable}
  where (datum is between '$myFirstDatum' and '$mySecondDatum') ";

  mysqli_query($connection, $query) or die('Error querying database.');
  $result = mysqli_query($connection, $query);

  echo "<table border='1'>";
  echo "<tr> <th>Title </th> <th> Summary</th> <th> Subject</th> </tr>";

  while ($row = mysqli_fetch_array($result))
  {


  echo "<tr><td>";
  echo  "<a href='" .$row['source']. "'>" . $row['title'] ."</a>" ;

  echo "</td><td>";

  #echo "<tr><td>";
  echo  $row['summary'] . ' ' .'<br />';
  echo "</td> <td>";

  echo  $row['subject'] . ' ' .'<br />';
  echo "</td> <td>";

  }

}

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

<a href= "http://marei.info/news.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
