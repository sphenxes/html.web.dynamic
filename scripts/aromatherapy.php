

<head>
<title>aromatherapy</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

       $servernamelog="localhost:3306";
       $usernamelog="u233929990_log";
       $passwordlog="Hysedclg0204";
       $databaselog="u233929990_log";

       $connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);

#$servername="194.5.156.22:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedcp0204";
$database="u233929990_apo";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";

$myTable=$_POST['tableName'];
$myAromatherapy=$_POST['aromatherapy'];
$myVolatile=$_POST['volatile'];
$myMainComponent=$_POST['maincomponent'];
$myPlant=$_POST['plant'];
$myBotanic=$_POST['botanic'];
$myFamily=$_POST['family'];
$myUses=$_POST['uses'];
$myMechanism=$_POST['mechanism'];
$myContraindication=$_POST['contraindication'];
$myIngredients=$_POST['ingrediants'];
$myOilMixture=$_POST['oilmixture'];
$myComments=$_POST['comments'];
$myBibliography = $_POST['bibliography'];
$myLanguage = $_POST['sprache'];
$myusername=$_POST['username'];
$mySignature=$_POST['signature'];

echo "Table Name:" . $myTable ."<br>";
echo "Plant:" . $myPlant ."<br>";
echo "Botanic:" . $myBotanic ."<br>";
echo "aromatherapy:" . $myAromatherapy ."<br>";
echo "Uses:" . $myUses ."<br>";
echo "Contraindication:" . $myContraindication ."<br>";
echo "Ingrediants:" . $myIngredients ."<br>";
echo "Öl Mischung:" . $myOilMixture ."<br>"; #
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";
echo "Language:" . $myLanguage ."<br>"; #
#echo "Signature:" . $mySignature ."<br>"; #


$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "INSERT INTO {$myTable} (aromatherapy, volatile, maincomponent, plant, botanic, family,
 uses, mechanism, contraindication, ingrediants, oilmixture, comments, bibliography, sprache, datum )
VALUES ('$myAromatherapy', '$myVolatile', '$myMainComponent', '$myPlant', '$myBotanic',
  '$myFamily', '$myUses', '$myMechanism', '$myContraindication', '$myIngredients', '$myOilMixture',
  '$myComments', '$myBibliography', '$myLanguage', CURDATE() )";

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
<a href= "http://pharmacy.pharmacology.today/aromatherapy.html"> Click Here to Return to Home  </a>

</body>


</html>
