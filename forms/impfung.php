

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

if (!empty($_POST['tableTradeMark'])) {
   echo "Table Name";

$myTable=$_POST['tableTradeMark'];
$myTradeMark=$_POST['trademark'];
$myCompany=$_POST['company'];
$myDisease=$_POST['disease'];
$myAge=$_POST['age'];
$myDoses=$_POST['doses'];
$myAdminsteration=$_POST['adminsteration'];
$myDosage=$_POST['dosage'];
$myComments=$_POST['comments'];

echo "Trade Mark:" . $myTradeMark ."<br>";
echo "Company:" . $myCompany ."<br>";
echo "Disease:" . $myDisease ."<br>";
echo "Age:" . $myAge ."<br>";
echo "Doses:" . $myDoses ."<br>";
echo "Adminsteration:" . $myAdminsteration ."<br>";
echo "Dosage:" . $myDosage ."<br>";
echo "Comments:" . $myComments ."<br>";

$query = "INSERT INTO {$myTable} (trademark, company, disease, age, doses, adminsteration, dosage, comments, datum)
VALUES ('$myTradeMark', '$myCompany', '$myDisease', '$myAge', '$myDoses', '$myAdminsteration', '$myDosage', '$myComments', CURDATE())";

$result = mysqli_query($connection, $query) or die('Connection Error');

mysqli_close($connection);

header('Refresh: 60; URL=http://localhost/impfung.html');
}


if (!empty($_POST['tableDisease'])) {
   echo "Table Disease";

$myTable=$_POST['tableDisease'];
$myDisease=$_POST['disease'];
$mySymptoms=$_POST['symptoms'];
$mySideEffects=$_POST['sideEffects'];
$myEpidemiology=$_POST['epidemiology'];
$myComments=$_POST['comments'];

echo "Table Name:" . $myTable ."<br>";
echo "Disease:" . $myDisease ."<br>";
echo "Symtoms:" . $mySymptoms ."<br>";
echo "Side Effects:" . $mySideEffects ."<br>";
echo "Epidemology:" . $myEpidemiology ."<br>";
echo "Comments:" . $myComments ."<br>";

$query = "INSERT INTO {$myTable} (disease, symptoms, sideEffects, epidemiology, comments, datum)
VALUES ('$myDisease', '$mySymptoms', '$mySideEffects', '$myEpidemiology', '$myComments', CURDATE())";

$result = mysqli_query($connection, $query) or die('Connection Error');

mysqli_close($connection);

header('Refresh: 60; URL=http://localhost/impfung.html');
}



if (!empty($_POST['tableContra'])) {
   //echo "Table Contraindication";

$myTable=$_POST['tableContra'];
$myAge=$_POST['age'];
$myPregnancy=$_POST['pregnancy'];
$myOrganDysfunction=$_POST['organdysfunction'];
$mySideEffects=$_POST['sideEffects'];
$myComments=$_POST['comments'];

echo "Table Name:" . $myTable ."<br>";
echo "Age:" . $myAge ."<br>";
echo "Pregnancy:" . $myPregnancy ."<br>";
echo "Organ Dysfuncion:" . $myOrganDysfunction ."<br>";
echo "Side Effects:" . $mySideEffects ."<br>";
echo "Comments:" . $myComments ."<br>";

$query = "INSERT INTO {$myTable} (age, pregnancy, organdysfunction, sideEffects, comments ,datum )
VALUES ('$myAge', '$myPregnancy', '$myOrganDysfunction', '$mySideEffects', '$myComments', CURDATE() )";

$result = mysqli_query($connection, $query) or die('Connection Error');

mysqli_close($connection);

header('Refresh: 60; URL=http://localhost/impfung.html');
}

?>

<br>
<br>
<br>
<a href= "http://localhost/impfung.html"> Click Here to Return to Home  </a>

</body>


</html>
