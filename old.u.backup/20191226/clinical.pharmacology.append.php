

<head>
<title>Clinical Pharmacology</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

$error="";
$mySearch="";
$myTable="";
$myColumn="";
$myNewValue="";
$correct="";
$myMainColumn="";

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
  $myAppendInstructor=$_POST['appendInstructor'];
  $myAppendClinical=$_POST['appendClinical'];
  $myAppendPhysiology=$_POST['appendPhysiology'];
  $myAppendTherapy=$_POST['appendTherapy'];
  $myAppendUse=$_POST['appendUses'];
  $myAppendMechanism=$_POST['appendMechanism'];
  $myAppendAdverseEffect=$_POST['appendAdverseEffect'];
  $myAppendComments=$_POST['appendComment'];
  $myAppendBibliography=$_POST['appendBibliography'];
  $myAppendSource=$_POST['appendSource'];
  $myAppendSignature=$_POST['appendSignature'];


  echo "Table Name:" . $myTable ."<br>";
  echo "Main Column:" . $myMainColumn ."<br>";
  echo "Search:" . $mySearch ."<br>";
  echo "Instructor: " . $myAppendInstructor."<br>";
  echo "Clinical: " . $myAppendClinical."<br>";
  echo "Physiology: " . $myAppendPhysiology."<br>";
  echo "Therapy: " . $myAppendTherapy."<br>";
  echo "Uses: " . $myAppendUse."<br>";
  echo "Mechanim:" . $myAppendMechanism."<br>";
  echo "Adverse Effects: " . $myAppendAdverseEffect."<br>";
  echo "Bibliography: " . $myAppendBibliography."<br>";
  echo "Comments: " . $myAppendComments ."<br>";
  echo "Source: " . $myAppendSource."<br>";



  $myusername=$_POST['username'];
  $mypassword=$_POST['appendSignature'];
  $sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
  $resultlog=mysqli_query($connectionlog, $sql);
  $count=mysqli_num_rows($resultlog);


  if ($count == '1'){

$query = "update {$myTable} set
    instructor = concat_ws (instructor, ' ','{$myAppendInstructor}', NULL),
    clinical = concat_ws (clinical, ' ','{$myAppendClinical}', NULL),
    physiology = concat_ws (physiology, ' ','{$myAppendPhysiology}', NULL),
    therapy = concat_ws (therapy, ' ','{$myAppendTherapy}', NULL),
    uses = concat_ws (uses, ' ','{$myAppendUse}', NULL),
    mechanism = concat_ws (mechanism, ' ','{$myAppendMechanism}', NULL),
    adverseeffect = concat_ws (adverseeffect, ' ','{$myAppendAdverseEffect}', NULL),
    bibliography= concat_ws (bibliography, ' ','{$myAppendBibliography}', NULL),
    comments= concat_ws (comments, ' ','{$myAppendComments}', NULL),
    date = current_timestamp()
    where {$myMainColumn} like '{$mySearch}%'";


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
<a href="http://pharmacy.pharmacology.today/clinical.pharmacology.html"> Click Here to Return to Home  </a>


</body>

</html>
