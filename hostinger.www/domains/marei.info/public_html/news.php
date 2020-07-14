

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
$username="u233929990_hesh";
$password="Hysedcnws0204";
$database="u233929990_news";




$connection = mysqli_connect($servername, $username, $password, $database);

echo "--------------------" ."<br>";
$myTable=$_POST['tableName'];
$myTitle=$_POST['title'];
$myTitle = str_replace("'"," ",$myTitle);
$myTitle = str_replace("\""," ",$myTitle);
$mySource=$_POST['source'];
$mySource = str_replace("'"," ",$mySource);
$mySubject=$_POST['subject'];
$mySubject = str_replace("'","''",$mySubject);
#$myAuthor=$_POST['author'];
#$myAuthor = str_replace("'","''",$myAuthor);
$mySummary=$_POST['summary'];
$mySummary = str_replace("'"," ",$mySummary);
$mySummary = str_replace("'","''",$mySummary);
$myComments=$_POST['comments'];
$myComments = str_replace("'","''",$myComments);
$myBibliography=$_POST['bibliography'];
$myBibliography = str_replace("'","''",$myBibliography);
$mySignature=$_POST['signature'];


echo "Table Name:" . $myTable ."<br>";
echo "Title:" . $myTitle ."<br>";
echo "Source:" . $mySource ."<br>";
echo "Subject:" . $mySubject ."<br>";
#echo "Author:" . $myAuthor ."<br>";
echo "Summary:" . $mySummary ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";


$myusername=$_POST['username'];
$mypassword=$_POST['signature'];
$sql="SELECT * FROM userlog WHERE username='$myusername' and password=MD5('$mypassword')";
$resultlog=mysqli_query($connectionlog, $sql);
$count=mysqli_num_rows($resultlog);


if ($count == '1'){

$query = "INSERT INTO {$myTable} (title, source, subject,  summary, comments, datum, bibliography)
VALUES ('$myTitle', '$mySource', '$mySubject', '$mySummary', '$myComments', CURDATE(), '$myBibliography')";

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
<a href= "http://marei.info/news.html"> Click Here to Return to Home  </a>

</body>


</html>
