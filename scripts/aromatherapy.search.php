
<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

       $servernamelog="localhost:3306";
       $usernamelog="u233929990_log";
       $passwordlog="Hysedclg0204";
       $databaselog="u233929990_log";

       $connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);

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


mysqli_query($connection, $query) or die('Error querying database.');
$result = mysqli_query($connection, $query);

echo "<table border='1'>";
echo "<tr> <th>Aromatherapy </th> <th>Medicinal  Plant</th> <th> Botanic</th> <th> Uses</th> <th>Oil Mixture </th> <th> Contraindications</th><th> Bibliography</th>  </tr>";

while ($row = mysqli_fetch_array($result))
{


  ?>
  <tr>
  <td><?php echo nl2br($row['aromatherapy']);?></td>
  <td><?php echo nl2br($row['plant']);?></td>
  <td><?php echo nl2br($row['botanic']); ?></td>
  <td><?php echo nl2br($row['uses']); ?></td>
  <td><?php echo nl2br($row['oilmixture']);?></td>
  <td><?php echo nl2br($row['contraindication']);?></td>
  <td><?php echo nl2br($row['bibliography']); ?></td>

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

<a href= "http://pharmacy.pharmacology.today/aromatherapy.html"> Click Here to Return to Home  </a>
</p>
</body>

</html>
