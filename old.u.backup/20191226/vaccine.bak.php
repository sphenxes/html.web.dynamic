

<head>
<title>Vaccines</title>
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
$myPathogen=$_POST['pathogen'];
$myEpidemiology=$_POST['epidemiology'];
$myVaccine=$_POST['vaccine'];
$myRadioProperty=$_POST['radioProperty'];
$myRadioLife=$_POST['radioLife'];
$myClinical=$_POST['clinical'];
$myTrademark=$_POST['trademark'];
$myCompany=$_POST['company'];
$myAge=$_POST['age'];
$myDosage=$_POST['dosage'];
$myAdministration = $_POST['administration'];
$myUses=$_POST['uses'];
$myContraindication=$_POST['contraindication'];
$myComments=$_POST['comments'];
$myBibliography = $_POST['bibliography'];
$mySignature=$_POST['signature'];

echo "Table Name:" . $myTable ."<br>";
echo "Clinical Picture:" . $myClinical ."<br>";
echo "Trade $myTrademark:" . $myTrademark ."<br>";
echo "Company:" . $myCompany ."<br>";
echo "Age:" . $myAge ."<br>";
echo "Administration:" . $myAdministration ."<br>"; #
echo "Dosage:" . $myDosage ."<br>"; #
echo "Uses:" . $myUses ."<br>";
echo "Contraindication:" . $myContraindication ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";

$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "INSERT INTO {$myTable} (pathogen, epidemiology, clinical, vaccine,
trademark, company, radioProperty, radioLife , age, dosage,
administration, uses, contraindication,  comments, bibliography)
VALUES ('$myPathogen', '$myEpidemiology','$myClinical', '$myVaccine',
'$myTrademark', '$myCompany', '$myRadioProperty', '$myRadioLife','$myAge', '$myDosage',
'$myAdministration', '$myUses', '$myContraindication', '$myComments', '$myBibliography')";


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
<a href= "http://pharmacy.pharmacology.today/vaccine.html"> Click Here to Return to Home  </a>

</body>


</html>
