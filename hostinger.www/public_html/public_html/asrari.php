

<head>
<title>What is in the News?</title>
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


/*$servername="sql223.main-hosting.eu:3306";*/
$servername="localhost:3306";
$username="u233929990_log";
$password="Hysedclg0204";
$database="u233929990_log";

$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";
$myTable=$_POST['tableName'];
$myUser_Name=$_POST['user_name'];
$myFirstName=$_POST['firstname'];
$myLastName=$_POST['lastname'];
$myTelephoneNumber=$_POST['telephonenumber'];
$myAddress=$_POST['address'];
$myPassword=$_POST['password'];
$myEmail=$_POST['email'];
$myEmailSecond=$_POST['emailsecond'];
$myQuestion=$_POST['question'];
$myHomePage=$_POST['homepage'];
$myURL=$_POST['url'];
$myRegistrationKey=$_POST['registrationkey'];
$myGeneral=$_POST['general'];
$myMisc=$_POST['misc'];

/*
echo "Table Name:" . $myTable ."<br>";
echo "Title:" . $myTitle ."<br>";
echo "Source:" . $mySource ."<br>";
echo "Subject:" . $mySubject ."<br>";
#echo "Author:" . $myAuthor ."<br>";
echo "Summary:" . $mySummary ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";
*/

$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "INSERT INTO {$myTable} (user_name, firstname, lastname, telephonenumber, address,
password, email, emailsecond, question, homepage, url, registrationkey, general, misc)
VALUES ('$myUser_Name', '$myFirstName', '$myLastName', '$myTelephoneNumber', '$myAddress', '$myPassword',
'$myEmail', '$myEmailSecond', '$myQuestion', '$myHomePage', '$myURL', '$myRegistrationKey',
 '$myGeneral', '$myMisc' )";

$result = mysqli_query($connection, $query) or die('Connection Error');
mysqli_close($connection);

}

else{
  echo "bye";
}


?>
<br>
<br>
<br>
<a href= "http://pharmacy.pharmacology.today/asrari.html"> Click Here to Return to Home  </a>

</body>


</html>
