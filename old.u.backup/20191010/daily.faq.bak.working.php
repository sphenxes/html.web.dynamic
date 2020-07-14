<head>
<title>Daily FAQ</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);




$servernamelog="localhost:3306";
$usernamelog="u233929990_log";
$passwordlog="Hysedchstngr0204";
$databaselog="u233929990_log";

$connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);



$servername="localhost:3306";
$username="u233929990_faq";
$password="Hysedchstngr0204";
$database="u233929990_faq";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";

$myTable=$_POST['tableName'];
$myCategory=$_POST['category'];
$mySubCategory=$_POST['subcategory'];
$myKunde=$_POST['kunde'];
$myTelephone=$_POST['telephone'];
$myAge=$_POST['age'];
$myQuestion=$_POST['question'];
$myAnswer=$_POST['answer'];
$myProduct=$_POST['product'];
$myDosage=$_POST['dosage'];
$myAdministration = $_POST['administration'];
$myUses=$_POST['uses'];
$myComments=$_POST['comments'];
$myBibliography = $_POST['bibliography'];
$myUploads = $_POST['radioImages'];
$mySignature=$_POST['signature'];

echo "Table Name:" . $myTable ."<br>";
echo "Category:" . $myCategory ."<br>";
echo "SubCategory" . $mySubCategory ."<br>";
echo "Kunde:" . $myKunde ."<br>";
echo "Telephone:" . $myTelephone ."<br>";
echo "Age:" . $myAge ."<br>";
echo "Question:" . $myQuestion ."<br>";
echo "Answer:" . $myAnswer ."<br>";
echo "Product:" . $myProduct ."<br>";
echo "Dosage:" . $myDosage ."<br>";
echo "Administration:" . $myAdministration ."<br>"; #
echo "Uses:" . $myUses ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";

$myusername=$_POST['username'];
$mypassword=$_POST['signature'];

$sql="SELECT * FROM userlog WHERE username='$myusername' and password='$mypassword'";
$resultlog=mysqli_query($connectionlog, $sql);

$count=mysqli_num_rows($resultlog);

echo "count is:" . $count . "<br>";

if ($count == '1'){
if  (strcasecmp($mySignature,'H159963')==0){

#$currentDir="/home/u233929990/domains/pharmacology.today/";
$currentDir="/home/u233929990/domains/pharmacology.today/public_html/uploads/";
$uploadImages="faq/$myUploads/";
$tempImages = $_FILES['uploadedimages']['tmp_name'];
$uploadDirImages=$currentDir.$uploadImages.$myTable."_".basename($_FILES['uploadedimages']['name']);

//echo "temp dir is:" . getcwd(). "tempImage is: ". $tempImages. "<br>";

if (move_uploaded_file($tempImages, $uploadDirImages)) {
    echo "Images are Uploaded";
    echo "<br>";
} else {
   echo "Images were not uploaded";
   echo "<br>";
}

}
else {

  echo "wrong sig. file(s) were not  upload";
}



#if  (strcasecmp($mySignature,'H159963')==0){

$query = "INSERT INTO {$myTable} (category, subcategory, kunde, telephone, age, question, answer, product, dosage, administration, uses, comments, bibliography)
VALUES ('$myCategory', '$mySubCategory','$myKunde', '$myTelephone', '$myAge', '$myQuestion', '$myAnswer', '$myProduct','$myDosage', '$myAdministration', '$myUses', '$myComments', '$myBibliography')";

$result = mysqli_query($connection, $query) or die('Connection Errors');
mysqli_close($connection);

#}

#else {

#  echo "Wrong sig. faq data";
#}


}

else{ echo "bye";}

?>
<br>
<br>
<br>
<a href= "http://pharmacy.pharmacology.today/daily.faq.html"> Click Here to Return to Home  </a>

</body>


</html>
