

<head>
<title>heilpflanze</title>
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

/*
$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="Herbs";
*/


#$servername="localhost:3306";
$servername="localhost:3306";
$username="u233929990_apo";
$password="Hysedchstngr0204";
$database="u233929990_apo";


$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";

  $myTable=$_POST['tableName'];
  $myMainColumn=$_POST['mainColumn'];
  $mySearch=($_POST['search']);
  $myAppendUse=$_POST['appendUses'];
  $myAppendMechanism=$_POST['appendMechanism'];
  $myAppendContraindicaton=$_POST['appendContraindication'];
  $myAppendIngrediant=$_POST['appendIngrediant'];
  $myAppendTeemischung=$_POST['appendTeemischung'];
  #$myAppendImages=$_POST['appendImages'];
  #$myAppendSource=$_POST['appendSource'];
  $myAppendComments=$_POST['appendComment'];
  $myAppendBibliography=$_POST['appendComment'];
  $myAppendSignature=$_POST['appendSignature'];

echo "Table Name:" . $myTable ."<br>";
echo "Main Column:" . $myMainColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
echo "Uses " . $myAppendUse ."<br>";
echo "Contraindication " . $myAppendContraindicaton ."<br>";
echo "Ingrediants " . $myAppendIngrediant ."<br>";
echo "Tees " . $myAppendTeemischung ."<br>";
#echo "Images" . $myAppendImages ."<br>";
#echo "Source " . $myAppendSource ."<br>";
echo "Bibliography " . $myAppendBibliography ."<br>";
echo "Comments " . $myAppendComments ."<br>";
echo "Signature " . $myAppendSignature ."<br>";

/*
$query01 = "update heilpflanze set
  uses = concat_ws (uses, ' ','', NULL),
  contraindication = concat_ws (contraindication, ' ','-my next tes', NULL),
  ingrediants = concat_ws (ingrediants, ' ','-my next tes', NULL),
  tees = concat_ws (tees, ' ','-my next tes', NULL),
  images = concat_ws (images, ' ','-my next tes', NULL),
  comments= concat_ws (comments, ' ','-my next tes', NULL),
  bibliography= concat_ws (bibliography, ' ','-my next tes', NULL)
  where plant like 'Anrnika%'";
*/

$query = "update {$myTable} set
    uses = concat_ws (uses, ' ','{$myAppendUse}', NULL),
    mechanism = concat_ws (mechanism, ' ','{$myAppendMechanism}', NULL),
    contraindication = concat_ws (contraindication, ' ','{$myAppendContraindicaton}', NULL),
    ingrediants = concat_ws (ingrediants, ' ','{$myAppendIngrediant}', NULL),
    tees = concat_ws (tees, ' ','{$myAppendTeemischung}', NULL),
    bibliography= concat_ws (bibliography, ' ','{$myAppendBibliography}', NULL),
    comments= concat_ws (comments, ' ','{$myAppendComments}', NULL),
    signature= concat_ws (bibliography, ' ','{$myAppendSignature}', NULL),
    datum = curdate(),
    date = current_timestamp()
    where plant like '{$mySearch}%'";


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);

?>
<br>
<br>
<br>
<a href="http://apo.marei.info/herbs.html"> Click Here to Return to Home  </a>

<!--
images = concat_ws (images, ' ','{$myAppendImages}', NULL),
source = concat_ws (source, ' ','{$myAppendSource}', NULL),
-->

</body>


</html>
