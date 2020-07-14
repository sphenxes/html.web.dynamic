

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

if ($myTable == 'TradeMark'){
echo "TradeMark";
}
elseif ($myTable == 'Contraindications'){
  echo "Contraindications";

}
elseif($myTable == 'Disease'){
  echo "Disease";
}
  else{
    echo no resuts;
  }



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

$query = "INSERT INTO {$myTable} (trademark, company, disease, age, doses, adminsteration, dosage, comments)
VALUES ('$myTradeMark', '$myCompany', '$myDisease', '$myAge', '$myDoses', '$myAdminsteration', '$myDosage', '$myComments')";

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
