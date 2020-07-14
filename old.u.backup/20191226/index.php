

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

$myAbsoluteAlcohol=$_POST['absolutealcohol'];
$myDilutedAlcohol=$_POST['dilutedalcohol'];
$myTotalAmount=$_POST['totalamount'];
$amountOfAlcohol = ($myDilutedAlcohol/$myAbsoluteAlcohol) * $myTotalAmount;
$amountOfAqua = $myTotalAmount - $amountOfAlcohol;
/*
echo "Absolute Alcohol:" . $myAbsoluteAlcohol ."<br>";
echo "dilutedalcohol:" . $myDilutedAlcohol ."<br>";
echo "totalamount:" . $myTotalAmount ."<br>";
*/
#echo "Amount of Alcohol:" .round($amountOfAlcohol,2) ."<br>";
echo "Amount of " .$myAbsoluteAlcohol."%".str_repeat('&nbsp;', 1)."Alcohol: ".str_repeat('&nbsp;', 2).round($amountOfAlcohol,2).str_repeat('&nbsp;', 1)."ml" ."<br>";
echo "Amount Aqua Pur.:" .str_repeat('&nbsp;', 12). round($amountOfAqua,2) .str_repeat('&nbsp;', 1)."ml"."<br>";

#echo round($number, 2);
/*
$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "INSERT INTO {$myTable} (title, source, subject,  summary, comments, datum, bibliography)
VALUES ('$myTitle', '$mySource', '$mySubject', '$mySummary', '$myComments', CURDATE(), '$myBibliography')";

$result = mysqli_query($connection, $query) or die('Connection Error');
mysqli_close($connection);

}

else{
  echo "bye";
}

*/
?>
<br>
<br>
<br>
<a href= "http://pharmacy.pharmacology.today/index.html"> Click Here to Return to Home  </a>

</body>


</html>
