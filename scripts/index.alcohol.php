

<head>
<title>What is in the News?</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);
/*
$servernamelog="localhost:3306";
$usernamelog="u233929990_log";
$passwordlog="Hysedclg0204";
$databaselog="u233929990_log";

$connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);

$servername="localhost:3306";
$username="u233929990_hesh";
$password="Hysedcnws0204";
$database="u233929990_news";




$connection = mysqli_connect($servername, $username, $password, $database);

*/
#echo "--------------------" ."<br>";

echo "<br/>";
echo "<br/>";
echo "<br/>";

#$myAbsoluteAlcoholVolume=$_POST['absolutealcoholvolume'];
$myAbsoluteAlcoholMass=$_POST['absolutealcoholmass'];
$myDichteStock=$_POST['dichtestock'];
$myAbsoluteVolume=$_POST['absolutevolume'];

#$myDilutedAlcoholVolume=$_POST['diltuedalcoholvolume'];
$myDilutedAlcoholMass=$_POST['dilutedalcoholmass'];
$myDichteDiluted=$_POST['dichtediluted'];

$myStockMass = ($myAbsoluteVolume * $myDichteStock);
$StockMass = ($myStockMass * $myAbsoluteAlcoholMass)/$myAbsoluteVolume;
$myWaterMassStock = $myStockMass - $StockMass;
#$myWasserContent = $myStockMass - $myStockMass;

#$myDilutedMass = ($myDilutedAlcoholVolume * $myDichteDiluted);
#$DilutedMass = ($myDilutedMass * $myDilutedAlcoholMass)/100;

$myZiellösung = ($StockMass * $myAbsoluteVolume)/$myDilutedAlcoholMass;

$myDilutedVolume = ($myZiellösung -( $myWaterMassStock ));

echo "Amount of Wasser Added " .$myDilutedVolume. " ml" ."<br>";
#echo "Amount of " .$myAbsoluteAlcohol."%".str_repeat('&nbsp;', 1)."Alcohol: ".str_repeat('&nbsp;', 2).round($amountOfAlcohol,2).str_repeat('&nbsp;', 1)."ml" ."<br>";
#echo "Amount Aqua Pur.:" .str_repeat('&nbsp;', 12). round($amountOfAqua,2) .str_repeat('&nbsp;', 1)."ml"."<br>";


?>
<br>
<br>
<br>
<a href= "http://pharmacy.pharmacology.today/index.html"> Click Here to Return to Home  </a>

</body>


</html>
