

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
$myFirstLevel=$_POST['firstlevel'];
$mySecondLevel=$_POST['secondlevel'];
$myATC=$_POST['atc'];
$myInstructor=$_POST['instructor'];
$myUses=$_POST['uses'];
$myAdverseEffect=$_POST['adverseeffect'];
$myTherapy=$_POST['therapy'];
$myPhysiology=$_POST['physiology'];
$myClinical=$_POST['clinical'];
$myMechanism=$_POST['mechanism'];
$myComments=$_POST['comments'];
$myBibliography = $_POST['bibliography'];
$mySource = $_POST['source'];
#$mySignature=$_POST['signature'];



echo "Table Name:" . $myTable ."<br>";
echo "First Level:" . $myFirstLevel ."<br>";
echo "Second Level:" . $mySecondLevel ."<br>";
echo "ATC:" . $myATC ."<br>";
echo "Instructor:" . $myInstructor ."<br>";
echo "Uses:" . $myUses ."<br>";
echo "AdverseEffect:" . $myAdverseEffect ."<br>";
echo "Therapy:" . $myTherapy ."<br>";
echo "Pharmacology:" . $myPhysiology ."<br>";
echo "Clinical:" . $myClinical ."<br>";
#echo "Source:" . $mySource ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";
echo "source:" . $mySource ."<br>"; #
#echo "Signature:" . $mySignature ."<br>"; #

$query = "INSERT INTO {$myTable} (firstlevel, secondlevel, atc, instructor, uses, adverseeffect, therapy, mechanism, physiology, clinical, comments, bibliography, source, date )
VALUES ('$myFirstLevel', '$mySecondLevel', '$myATC', '$myUses', '$myInstructor','$myAdverseEffect', '$myTherapy', '$myMechanism','$myPhysiology',  '$myClinical', '$myComments', '$myBibliography', '$mySource',  current_timestamp() )";

$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);

?>
<br>
<br>
<br>
<a href= "http://pharmacy.marei.info/clinical.pharmacology.html"> Click Here to Return to Home  </a>

</body>


</html>
