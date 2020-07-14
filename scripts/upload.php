<?php

$servernamelog="localhost:3306";
$usernamelog="u233929990_log";
$passwordlog="Hysedclg0204";
$databaselog="u233929990_log";

$connectionlog = mysqli_connect($servernamelog, $usernamelog, $passwordlog, $databaselog);


	$servername="localhost:3306";
	$username="u233929990_apo";
	$password="Hysedcp0204";
	$database="u233929990_apo";

$connection = mysqli_connect($servername, $username, $password, $database);

	$currentDir="/home/u233929990/domains/pharmacology.today/public_html/uploads/";
	#$uploadImages="uploads/images/";
	$uploadImages=$_POST['radioTitle'];
	$uploadDir=$currentDir.$uploadImages;
	$tempImages = $_FILES['filename']['tmp_name'];
	$imageName=$_FILES['filename']['name'];
	$mySubject=$_POST['radioCategory'];
	$myTitle=$_POST['title'];
	$uploadDirImages=$currentDir.$uploadImages."/".$mySubject."_".basename($_FILES['filename']['name']);
	$mySource=$_POST['source'];
	$myDescription=$_POST['description'];
	$mySignature=$_POST['signature'];


echo "Images" . $uploadDirImages."<br>";
echo "Image Name" . $imageName."<br>";
echo "Raido radioCategory: " . $mySubject."<br>";
echo "Title" . $myTitle."<br>";

	//echo "temp dir is:" . getcwd(). "tempImage is: ". $tempImages. "<br>";

	$myusername=$_POST['username'];
	$mypassword=$_POST['signature'];
	$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
	$resultlog=mysqli_query($connectionlog, $sql);
	$count=mysqli_num_rows($resultlog);

if ($count == '1'){



	if (move_uploaded_file($tempImages, $uploadDirImages)) {

			$query = "INSERT INTO images (filepath, filename, imagename, title, subject, source, description)
			VALUES ('$uploadDir','$uploadDirImages', '$imageName', '$myTitle', '$mySubject', '$mySource','$myDescription')";


	$result = mysqli_query($connection, $query) or die('Connection Errors');
	mysqli_close($connection);
}

}

else{
  echo "bye";
}

?>
