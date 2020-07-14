

<head>
<title>Impfung</title>
</head>
<body>

<?php
ini_set("display_errors",1);
       error_reporting(E_ALL);

$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="impfung";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";
$myTable=$_POST['tableName'];
$myTradeName=$_POST['tradename'];
$myCompany=$_POST['company'];
$myDisease=$_POST['disease'];
$myAge=$_POST['age'];
$myDoses=$_POST['doses'];
$myContraindications=$_POST['contraindications'];
//$my= mysqli_real_escape_string($connection, $myContraindications);
$myAdminsteration=$_POST['adminsteration'];
$myDosage=$_POST['dosage'];
$mySideEffects=$_POST['sideEffects'];
$myComments=$_POST['comments'];

echo "Trade Name:" . $myTradeName ."<br>";
echo "Company:" . $myCompany ."<br>";
echo "Disease:" . $myDisease ."<br>";
echo "Age:" . $myAge ."<br>";
echo "Doses:" . $myDoses ."<br>";
echo "Contraindications:" . $myContraindications ."<br>";
echo "Adminsteration:" . $myAdminsteration ."<br>";
echo "Dosage:" . $myDosage ."<br>";
echo "Side Effects:" . $mySideEffects ."<br>";
echo "Comments:" . $myComments ."<br>";

$query = "INSERT INTO {$myTable} (tradename, company, disease, age, doses, contraindications, adminsteration, dosage, sideEffects, comments)
VALUES ('$myTradeName', '$myCompany', '$myDisease', '$myAge', '$myDoses', '$myContraindications', '$myAdminsteration', '$myDosage', '$mySideEffects', '$myComments')";


#$query = "INSERT INTO {$myTable} (tradename, company, disease, age, doses, contraindication, adminsteration, dosage, sideEffects, comments)
#VALUES ('$myTradeName', '$myCompany', '$myDisease', '$myAge', '$myDoses', '$myContraindications', '$myAdminsteration', '$myDosage', '$mySideEffects', '$myComments')";


$result = mysqli_query($connection, $query) or die('Connection Error');

mysqli_close($connection);

header('Refresh: 60; URL=http://localhost/impfung_fill_tables.html');



?>
<br>
<br>
<br>
<a href= "http://localhost/impfung_fill_tables.html"> Click Here to Return to Home  </a>

</body>


</html>
