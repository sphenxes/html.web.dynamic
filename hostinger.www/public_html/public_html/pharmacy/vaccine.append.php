

<head>
<title>heilpflanze</title>

</head>
<body>

<?php
$error="";
$mySearch="";
$myTable="";
$myColumn="";
$myNewValue="";
$correct="";

ini_set("display_errors",1);
       error_reporting(E_ALL);


       $servernamelog="localhost:3306";
       $usernamelog="u233929990_log";
       $passwordlog="Hysedclg0204";
       $databaselog="u233929990_log";

       $connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);


#$servername="localhost:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedcp0204";
$database="u233929990_apo";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";

  $myTable=$_POST['tableName'];
  $myMainColumn=$_POST['mainColumn'];
  $mySearch=$_POST['search'];
  $myAppendAge=$_POST['age'];
  $myAppendDosage=$_POST['dosage'];
  $myAppendAdministration=$_POST['administration'];
  $myAppendUses=$_POST['uses'];
  $myAppendContraindication=$_POST['contraindication'];
  $myAppendComments=$_POST['comment'];
  $myAppendBibliography=$_POST['bibliography'];
  $myAppendEpidemiology=$_POST['epidemiology'];
  $myAppendVaccine=$_POST['vaccine'];
  $myAppendTradeMark=$_POST['trademark'];
  $myAppendSignature=$_POST['appendSignature'];



echo "Table Name:" . $myTable ."<br>";
echo "Main Column:" . $myMainColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
echo "Age:" . $myAppendAge ."<br>";
echo "Dosage " . $myAppendDosage ."<br>";
echo "Administration " . $myAppendAdministration ."<br>";
echo "Uses " . $myAppendUses ."<br>";
echo "Contraindication " . $myAppendContraindication ."<br>";
echo "Comments " . $myAppendComments ."<br>";
echo "Vaccine " . $myAppendVaccine ."<br>";
echo "Trademark " . $myAppendTradeMark ."<br>";
echo "Bibliography " . $myAppendBibliography ."<br>";

$myusername=$_POST['username'];
$mypassword=$_POST['appendSignature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);

//echo "count asrari" . $count;

if ($count == '1'){

//echo "good connection";

$query = "update {$myTable} set
    age = concat_ws (age, ' ','{$myAppendAge}', NULL),
    dosage = concat_ws (dosage, ' ','{$myAppendDosage}', NULL),
    administration = concat_ws (administration, ' ','{$myAppendAdministration}', NULL),
    uses = concat_ws (uses, '','{$myAppendUses}', NULL),
    contraindication = concat_ws (contraindication, ' ','{$myAppendContraindication}', NULL),
    comments = concat_ws (comments, ' ','{$myAppendComments}', NULL),
    bibliography= concat_ws (bibliography, '','{$myAppendBibliography}', NULL),
    epidemiology = concat_ws (epidemiology, ' ','{$myAppendEpidemiology}', NULL),
    vaccine = concat_ws (vaccine, ' ','{$myAppendVaccine}', NULL),
    trademark   = concat_ws (trademark, ' ','{$myAppendTradeMark}', NULL)
    where  {$myMainColumn} like '{$mySearch}%'";


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);

//echo "good connecion";
}

else{
  echo "bye";
}


?>
<br>
<br>
<br>
<a href="http://pharmacy.pharmacology.today/vaccine.html"> Click Here to Return to Home  </a>

<!--
images = concat_ws (images, ' ','{$myAppendImages}', NULL),
source = concat_ws (source, ' ','{$myAppendSource}', NULL),
-->

</body>


</html>
