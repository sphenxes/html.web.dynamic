

<head>
<title>What is in the News?</title>
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="News01";

$connection = mysqli_connect($servername, $username, $password, $database);

#http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

echo "--------------------" ."<br>";
$myTable=$_POST['tableName'];
$myTitle=$_POST['title'];
$myTitle = str_replace("'","''",$myTitle);
$mySource=$_POST['source'];
$mySubject=$_POST['subject'];
$mySubject = str_replace("'","''",$mySubject);
$myAuthor=$_POST['author'];
$myAuthor = str_replace("'","''",$myAuthor);
$mySummary=$_POST['summary'];
$mySummary = str_replace("'","''",$mySummary);
$myComments=$_POST['comments'];
$myComments = str_replace("'","''",$myComments);
#$myDate=$_POST['datum'];
$myBibliography=$_POST['bibliography'];
$myBibliography = str_replace("'","''",$myBibliography);
#echo "id" . $id . "<br>";

echo "Table Name:" . $myTable ."<br>";
echo "Title:" . $myTitle ."<br>";
echo "Source:" . $mySource ."<br>";
echo "Subject:" . $mySubject ."<br>";
echo "Author:" . $myAuthor ."<br>";
echo "Summary:" . $mySummary ."<br>";
echo "Comments:" . $myComments ."<br>";
#echo "Date:" . $myDate ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";

#$query = "INSERT INTO {$myTable} (title, source, subject, author, summary, comments, datum, bibliography)
#VALUES ('$myTitle', '$mySource', '$mySubject', '$myAuthor', '$mySummary', '$myComments', '$myDate', '$myBibliography')";

$query = "INSERT INTO {$myTable} (title, source, subject, author, summary, comments, datum, bibliography)
VALUES ('$myTitle', '$mySource', '$mySubject', '$myAuthor', '$mySummary', '$myComments', CURDATE(), '$myBibliography')";

#$result = mysqli_query($connection, $query) or die('Connection Error');
$result = mysqli_query($connection, $query) or die('Connection Error');
#$query = "INSERT INTO plants (plantsName, comments) VALUES ('$plant', '$mycomment')";
#$query = mysqli_query("INSERT INTO '$mytable' (plantsName, comments) VALUES ('$plant', '$mycomment')") or die('No Connection');
#mysqli_query($connection, $query) or die('Connection Error');

mysqli_close($connection);

header('Refresh: 1.5; URL=http://localhost/news01.html');
?>

<a href= "http://localhost/news.html"> Click Here to Return to Home  </a>

</body>


</html>
