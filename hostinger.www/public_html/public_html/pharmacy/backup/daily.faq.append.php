

<head>
<title>Daily FAQ</title>
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

ini_set("display_errors",1);
       error_reporting(E_ALL);

#$servername="localhost:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
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



echo "Table Name:" . $myTable ."<br>";
echo "Main Column:" . $myMainColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
echo "Age:" . $myAppendAge ."<br>";
echo "Dosage " . $myAppendDosage ."<br>";
echo "Administration " . $myAppendAdministration ."<br>";
echo "Uses " . $myAppendUses ."<br>";
echo "Contraindication " . $myAppendContraindication ."<br>";
echo "Comments " . $myAppendComments ."<br>";
echo "Bibliography " . $myAppendBibliography ."<br>";

$query = "update {$myTable} set
    age = concat_ws (age, ' ','{$myAppendAge}', NULL),
    dosage = concat_ws (dosage, ' ','{$myAppendDosage}', NULL),
    administration = concat_ws (administration, ' ','{$myAppendAdministration}', NULL),
    uses = concat_ws (uses, ' ','{$myAppendUses}', NULL),
    contraindication = concat_ws (contraindication, ' ','{$myAppendContraindication}', NULL),
    comments = concat_ws (comments, ' ','{$myAppendComments}', NULL),
    bibliography= concat_ws (bibliography, ' ','{$myAppendBibliography}', NULL),
    epidemiology = concat_ws (epidemiology, ' ','{$myAppendEpidemiology}', NULL),
    vaccine = concat_ws (vaccine, ' ','{$myAppendVaccine}', NULL),
    trademark   = concat_ws (trademark, ' ','{$myAppendTradeMark}', NULL)
    where  pathogen like '{$mySearch}%'";


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);

?>
<br>
<br>
<br>
<a href="http://pharmacy.marei.info/vaccine.html"> Click Here to Return to Home  </a>

<!--
images = concat_ws (images, ' ','{$myAppendImages}', NULL),
source = concat_ws (source, ' ','{$myAppendSource}', NULL),
-->

</body>


</html>
