

<head>
<title>heilpflanze</title>
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

//http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

echo "--------------------" ."<br>";

$myTable=$_POST['tableName'];
$myPlant=$_POST['plant'];
$myPlant = str_replace("'"," ",$myPlant);
$myPlant = str_replace("\""," ",$myPlant);

$myBotanic=$_POST['botanic'];
$myBotanic = str_replace("'"," ",$myBotanic);
$myBotanic = str_replace("\""," ",$myBotanic);

$myPhytotherapy=$_POST['phytotherapy'];
$myPhytotherapy = str_replace("'"," ",$myPhytotherapy);
$myPhytotherapy = str_replace("\""," ",$myPhytotherapy);

$myUses=$_POST['uses'];
$myUses = str_replace("'"," ",$myUses);
$myUses = str_replace("\""," ",$myUses);
$myContraindication=$_POST['contraindication'];
$myContraindication = str_replace("'"," ",$myContraindication);
$myContraindication = str_replace("\""," ",$myContraindication);

$myIngredients=$_POST['ingrediants'];
$myIngredients = str_replace("'"," ",$myIngredients);
$myIngredients = str_replace("\""," ",$myIngredients);

$myTees=$_POST['tees'];
#$myImages=$_POST['images'];
#$mySource=$_POST['source'];
$myComments=$_POST['comments'];
$myComments = str_replace("'"," ",$myComments);
$myComments = str_replace("\""," ",$myComments);

$myBibliography = $_POST['bibliography'];
$myBibliography = str_replace("'"," ",$myBibliography);
$myBibliography = str_replace("\""," ",$myBibliography);

$myLanguage = $_POST['sprache'];

$mySignature=$_POST['signature'];

echo "Table Name:" . $myTable ."<br>";
echo "Plant:" . $myPlant ."<br>";
echo "Botanic:" . $myBotanic ."<br>";
echo "Phytotherapy:" . $myPhytotherapy ."<br>";
echo "Uses:" . $myUses ."<br>";
echo "Contraindication:" . $myContraindication ."<br>";
echo "Ingrediants:" . $myIngredients ."<br>";
echo "Tee Mischung:" . $myTees ."<br>"; #
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";
echo "Language:" . $myLanguage ."<br>"; #

$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "INSERT INTO {$myTable} (plant, botanic, phytotherapy, uses, contraindication, ingrediants, tees, comments, bibliography, sprache, signature, datum )
VALUES ('$myPlant', '$myBotanic', '$myPhytotherapy', '$myUses', '$myContraindication', '$myIngredients', '$myTees',  '$myComments', '$myBibliography', '$myLanguage', '$mySignature', CURDATE() )";

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
<a href= "http://pharmacy.pharmacology.today/herbs.html"> Click Here to Return to Home  </a>

</body>


</html>
