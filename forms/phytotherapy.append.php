

<head>
<title>Phytotherapy</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

$error="";
$mySearch="";
$myTable="";
$myColumn="";
$myNewValue="";
$correct="";

ini_set("display_errors",1);
       error_reporting(E_ALL);


       $servernamelog="localhost:3306";
       $usernamelog="u233929990_log";
       $passwordlog="Hysedclg0204";
       $databaselog="u233929990_log";

       $connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);

#$servername="localhost:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedcp0204";
$database="u233929990_apo";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";

  $myTable=$_POST['tableName'];
  $myMainColumn=$_POST['mainColumn'];
  $mySearch=($_POST['search']);
  $myAppendUse=$_POST['appendUses'];
  $myAppendMechanism=$_POST['appendMechanism'];
  $myAppendContraindicaton=$_POST['appendContraindication'];
  $myAppendIngrediant=$_POST['appendIngrediant'];
  $myAppendTeemischung=$_POST['appendTeemischung'];
  $myAppendBibliography=$_POST['appendBibliography'];
  $myAppendSignature=$_POST['appendSignature'];

echo "Table Name:" . $myTable ."<br>";
echo "Main Column:" . $myMainColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
echo "Uses " . $myAppendUse ."<br>";
echo "Contraindication " . $myAppendContraindicaton ."<br>";
echo "Ingrediants " . $myAppendIngrediant ."<br>";
echo "Tees " . $myAppendTeemischung ."<br>";
echo "Bibliography " . $myAppendBibliography ."<br>";

$myusername=$_POST['username'];
$mypassword=$_POST['appendSignature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "update {$myTable} set
    uses = concat_ws (uses, ' ','{$myAppendUse}', NULL),
    mechanism = concat_ws (mechanism, ' ','{$myAppendMechanism}', NULL),
    contraindication = concat_ws (contraindication, ' ','{$myAppendContraindicaton}', NULL),
    ingrediants = concat_ws (ingrediants, ' ','{$myAppendIngrediant}', NULL),
    tees = concat_ws (tees, ' ','{$myAppendTeemischung}', NULL),
    bibliography= concat_ws (bibliography, ' ','{$myAppendBibliography}', NULL),
    signature= concat_ws (bibliography, ' ','{$myAppendSignature}', NULL),
    datum = curdate(),
    date = current_timestamp()
    where plant like '{$mySearch}%'";


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);

}

else{
  echo "bye";
}


?>
<br>
<br>
<br>
<a href="http://pharmacy.pharmacology.today/phytotherapy.html"> Click Here to Return to Home  </a>



</body>

<!-- comments= concat_ws (comments, ' ','{$myAppendComments}', NULL),-->
</html>
