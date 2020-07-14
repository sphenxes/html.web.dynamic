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
$username="u233929990_apo";
$password="Hysedcp0204";
$database="u233929990_apo";


$connection = mysqli_connect($servername, $username, $password, $database);

$myTable=$_POST['tableName'];
$mySearchTerm=$_POST['searchterm'];
$myRadioButton=$_POST['radioTitle'];
$myRadioSubject=$_POST['radioCategory'];
#$myImages=$_POST['filename'];

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
echo "<tr> <th>Title </th> <th> Subject</th><th>Description</th><th>Image</th></tr>";

while ($row = mysqli_fetch_array($result))
{
  $image=$row['imagename'];
  $image_src="/uploads/images/".$myRadioSubject."_".$image;

?>
  <tr>

             <td><?php echo $row['title']; ?></td>
             <td><?php echo $row['subject']; ?></td>
             <td><?php echo $row['description']; ?></td>
<td><?php echo "<image src=\"". $image_src . "\" alt=\"\" height=\"400\" width=\"400\" />"; ?> </td>;


    </tr>
<?php
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




<a href= "http://pharmacology.today/upload.html"> Click Here to Return to Home  </a>

<!-- <img src='<?php echo $image_src;  ?>' >-->
</p>
</body>


</html>
