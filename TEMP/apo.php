

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
*/

/*$servername="localhost:3306";*/



$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";





$connection = mysqli_connect($servername, $username, $password, $database);

//http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

echo "--------------------" ."<br>";
$myTable=$_POST['tableName'];
$myArzneibuch=$_POST['arzneibuch'];
$myBotanic=$_POST['botanic'];
$myPlant=$_POST['plant'];
$myUses=$_POST['uses'];
$myIngredients=$_POST['ingrediants'];
$myImages=$_POST['images'];
$myContraindication=$_POST['contraindication'];
$myComments=$_POST['comments'];
$mySource=$_POST['source'];
$myBibliography = $_POST['bibliography'];


echo "Table Name:" . $myTable ."<br>";
echo "Botanic:" . $myBotanic ."<br>";
echo "Plant:" . $myPlant ."<br>";
echo "Uses:" . $myUses ."<br>";
echo "Ingrediants:" . $myIngredients ."<br>";
echo "Images:" . $myImages ."<br>";
echo "Source:" . $mySource ."<br>";
echo "Contraindication:" . $myContraindication ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";

$query = "INSERT INTO {$myTable} (arzneibuch, botanic, plant, uses, ingrediants, images, source, contraindication, comments, datum, bibliography)
VALUES ('$myArzneibuch','$myBotanic', '$myPlant', '$myUses', '$myIngredients', '$myImages', '$mySource','$myContraindication', '$myComments', CURDATE(), '$myBibliography' )";

$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);
//header('Refresh: 60; URL=http://localhost/news.html');

?>
<br>
<br>
<br>
<a href= "http://localhost/apo.html"> Click Here to Return to Home  </a>

</body>


</html>
