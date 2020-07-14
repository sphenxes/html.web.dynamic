

<head>
<title>Daily FAQ Append</title>
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



              $servernamelog="localhost:3306";
              $usernamelog="u233929990_log";
              $passwordlog="Hysedclg0204";
              $databaselog="u233929990_log";

              $connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);



#$servername="localhost:3306";
$servername="localhost:3306";
$username="u233929990_faq";
$password="Hysedcfq0204";
$database="u233929990_faq";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";

$myTable=$_POST['tableName'];
$myMainColumn=$_POST['mainColumn'];
$myAppendAnswer=$_POST['appendAnswer'];
$myAppendUses=$_POST['appendUses'];
$myAppendProduct=$_POST['appendProduct'];
$myAppendAdministration =$_POST['appendAdministration'];
$myAppendBibliography = $_POST['appendBibliography'];
$myAppendSignature=$_POST['appendSignature'];

/*
$myAppendCategory=$_POST['appendCategory'];
$myAppendSubCategory=$_POST['appendSubcategory'];
$myAppendKunde=$_POST['appendKunde'];
$myAppendTelephone=$_POST['appendTelephone'];
$myAppendAge=$_POST['appendAge'];
$myAppendQuestion=$_POST['appendQuestion'];
$myAppendDosage=$_POST['appendDosage'];
$myApppendComments=$_POST['appendComments'];
*/

echo "Table Name:" . $myTable ."<br>";
echo "Main Column:" . $myMainColumn ."<br>";
echo "Search:" . $mySearch ."<br>";
#echo "Age:" . $myAppendAge ."<br>";
#echo "Dosage " . $myAppendDosage ."<br>";
echo "Administration " . $myAppendAdministration ."<br>";
echo "Uses " . $myAppendUses ."<br>";
#echo "Contraindication " . $myAppendContraindication ."<br>";
#echo "Comments " . $myAppendComments ."<br>";
echo "Bibliography " . $myAppendBibliography ."<br>";


$myusername=$_POST['username'];
$mypassword=$_POST['appendSignature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "update {$myTable} set
    answer = concat_ws (answer, ' ','{$myAppendAnswer}', NULL),
    uses = concat_ws (uses, ' ','{$myAppendUses}', NULL),
    product = concat_ws (product, ' ','{$myAppendProduct}', NULL),
    administration = concat_ws (administration, ' ','{$myAppendAdministration}', NULL),
    bibliography= concat_ws (bibliography, ' ','{$myAppendBibliography}', NULL)
    where  '{$myMainColumn}' like '{$mySearch}%'";


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
<a href="http://pharmacy.pharmacology.today/daily.faq.html"> Click Here to Return to Home  </a>

<!--
images = concat_ws (images, ' ','{$myAppendImages}', NULL),
source = concat_ws (source, ' ','{$myAppendSource}', NULL),
-->

</body>


</html>
