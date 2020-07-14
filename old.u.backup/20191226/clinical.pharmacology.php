

<head>
<title>heilpflanze</title>
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

echo "--------------------" ."<br>";

$myTable=$_POST['tableName'];
$myFirstLevel=$_POST['firstlevel'];
$mySecondLevel=$_POST['secondlevel'];
$myATC=$_POST['atc'];
$myInstructor=$_POST['instructor'];
$myClinical=$_POST['clinical'];
$myPhysiology=$_POST['physiology'];
$myUses=$_POST['uses'];
$myAdverseEffect=$_POST['adverseeffect'];
$myTherapy=$_POST['therapy'];
$myMechanism=$_POST['mechanism'];
$myComments=$_POST['comments'];
$myBibliography = $_POST['bibliography'];
$mySource = $_POST['source'];
$mySignature=$_POST['signature'];



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

$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){


$query = "INSERT INTO {$myTable} (firstlevel, secondlevel, atc, instructor, uses, adverseeffect, therapy, mechanism, physiology, clinical, comments, bibliography, source, date )
VALUES ('$myFirstLevel', '$mySecondLevel', '$myATC', '$myUses', '$myInstructor','$myAdverseEffect', '$myTherapy', '$myMechanism','$myPhysiology',  '$myClinical', '$myComments', '$myBibliography', '$mySource',  current_timestamp() )";

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
<a href= "http://pharmacy.pharmacology.today/clinical.pharmacology.html"> Click Here to Return to Home  </a>

</body>


</html>
