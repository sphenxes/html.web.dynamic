

<head>
<title>heilpflanze</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);


/*
$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="Herbs";
$servername="sql223.main-hosting.eu:3306";
*/


#$servername="194.5.156.22:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";




$connection = mysqli_connect($servername, $username, $password, $database);

//http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

echo "--------------------" ."<br>";

$myTable=$_POST['tableName'];
$myPlant=$_POST['plant'];
$myBotanic=$_POST['botanic'];
$myArzneibuch=$_POST['arzneibuch'];
$myUses=$_POST['uses'];
$myContraindication=$_POST['contraindication'];
$myIngredients=$_POST['ingrediants'];
$myTees=$_POST['tees'];
#$myImages=$_POST['images'];
#$mySource=$_POST['source'];
$myComments=$_POST['comments'];
$myBibliography = $_POST['bibliography'];
$myLanguage = $_POST['sprache'];
$mySignature=$_POST['signature'];



echo "Table Name:" . $myTable ."<br>";
echo "Plant:" . $myPlant ."<br>";
echo "Botanic:" . $myBotanic ."<br>";
echo "Arzneibuch:" . $myArzneibuch ."<br>";
echo "Uses:" . $myUses ."<br>";
echo "Contraindication:" . $myContraindication ."<br>";
echo "Ingrediants:" . $myIngredients ."<br>";
echo "Tee Mischung:" . $myTees ."<br>"; #
#echo "Images:" . $myImages ."<br>";
#echo "Source:" . $mySource ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";
echo "Language:" . $myLanguage ."<br>"; #
echo "Signature:" . $mySignature ."<br>"; #

$query = "INSERT INTO {$myTable} (plant, botanic, arzneibuch, uses, contraindication, ingrediants, tees, comments, bibliography, sprache, signature, datum )
VALUES ('$myPlant', '$myBotanic', '$myArzneibuch', '$myUses', '$myContraindication', '$myIngredients', '$myTees',  '$myComments', '$myBibliography', '$myLanguage', '$mySignature', CURDATE() )";

$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);

?>
<br>
<br>
<br>
<a href= "http://pharmacy.pharmacology.today/herbs.html"> Click Here to Return to Home  </a>

</body>


</html>
