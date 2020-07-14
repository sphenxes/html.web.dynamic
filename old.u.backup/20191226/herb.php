

<head>
<title>Vaccination</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="impfung";



/*$servername="sql223.main-hosting.eu:3306";*/

/*$servername="localhost:3306";
$username="u233929990_impf";
$password="Hysedchstngr0204";
$database="u233929990_impf";
*/



$connection = mysqli_connect($servername, $username, $password, $database);

//http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

echo "--------------------" ."<br>";
$myTable=$_POST['tableName'];
$myTrademark=$_POST['trademark'];
$myCompany=$_POST['company'];
$myDisease=$_POST['disease'];
$myAge=$_POST['age'];
$myDosage=$_POST['dosage'];
$myAdminsteration=$_POST['adminsteration'];
$myContraindication=$_POST['contraindication'];
$myBibliography = $_POST['bibliography'];
$myComments=$_POST['comments'];

echo "Table Name:" . $myTable ."<br>";
echo "Trademark:" . $myTrademark ."<br>";
echo "Company:" . $myCompany ."<br>";
echo "Disease:" . $myDisease ."<br>";
echo "Age:" . $myAge ."<br>";
echo "Dosage:" . $myDosage ."<br>";
echo "Administration:" . $myAdminsteration ."<br>";
echo "Contraindication:" . $myContraindication ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";

$query = "INSERT INTO {$myTable} (trademark, company, disease, age, dosage, adminsteration, contraindication, comments, datum, bibliography)
VALUES ('$myTrademark', '$myCompany', '$myDisease', '$myAge', '$myDosage', '$myAdminsteration','$myContraindication', '$myComments', CURDATE(), '$myBibliography' )";

$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);
//header('Refresh: 60; URL=http://localhost/news.html');

?>
<br>
<br>
<br>
<a href= "http://marei.info/index.html"> Click Here to Return to Home  </a>

</body>


</html>
