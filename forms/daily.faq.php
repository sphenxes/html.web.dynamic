<head>
<title>Daily FAQ</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

#include 'filesLogic.php';

#$servername="194.5.156.22:3306";
$servername="localhost:3306";
$username="u233929990_faq";
$password="Hysedchstngr0204";
$database="u233929990_faq";




$connection = mysqli_connect($servername, $username, $password, $database);

//http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

echo "--------------------" ."<br>";

$currentDir="/home/u233929990/domains/pharmacology.today/public_html/pharmacy/";


$uploadImages="uploads/images/";
$tempImages = $_FILES['uploadedimages']['tmp_name'];
$uploadDirImages=$currentDir.$uploadImages.basename($_FILES['uploadedimages']['name']);

echo "temp dir is:" . getcwd(). "tempImage is: ". $tempImages. "<br>";
#echo "     my directory:" . "$uploadTemp". "\n";

if (move_uploaded_file($tempImages, $uploadDirImages)) {
    echo "Images are Uploaded";
    echo "<br>";
} else {
   echo "Images were not uploaded";
   echo "<br>";
}



$uploadFiles="uploads/files/";
$tempFiles = $_FILES['uploadedfile']['tmp_name'];
$uploadDirFiles=$currentDir.$uploadFiles.basename($_FILES['uploadedfile']['name']);

if (move_uploaded_file($tempFiles, $uploadDirFiles)) {
    echo "Files are Uploaded";
    echo "<br>";

} else {
   echo "File were not uploaded";
   echo "<br>";
}

#move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);

/*
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
#$mySignature=$_POST['signature'];

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


$query = "INSERT INTO {$myTable} (pathogen, epidemiology, clinical, vaccine,
trademark, company, radioProperty, radioLife , age, dosage,
administration, uses, contraindication,  comments, bibliography)
VALUES ('$myPathogen', '$myEpidemiology','$myClinical', '$myVaccine',
'$myTrademark', '$myCompany', '$myRadioProperty', '$myRadioLife','$myAge', '$myDosage',
'$myAdministration', '$myUses', '$myContraindication', '$myComments', '$myBibliography')";


$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);
*/

?>
<br>
<br>
<br>
<a href= "http://pharmacy.pharmacology.today/daily.faq.html"> Click Here to Return to Home  </a>

</body>


</html>
