

<head>
<title>What is in the News?</title>
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> -->
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

/*$servername="sql223.main-hosting.eu:3306";*/
$servername="localhost:3306";
$username="u233929990_hesh";
$password="Hysedchstngr0204";
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
$myAuthor=$_POST['author'];
$myAuthor = str_replace("'","''",$myAuthor);
$mySummary=$_POST['summary'];
$mySummary = str_replace("'"," ",$mySummary);
$mySummary = str_replace("'","''",$mySummary);
$myComments=$_POST['comments'];
$myComments = str_replace("'","''",$myComments);
$myBibliography=$_POST['bibliography'];
$myBibliography = str_replace("'","''",$myBibliography);


echo "Table Name:" . $myTable ."<br>";
echo "Title:" . $myTitle ."<br>";
echo "Source:" . $mySource ."<br>";
echo "Subject:" . $mySubject ."<br>";
echo "Author:" . $myAuthor ."<br>";
echo "Summary:" . $mySummary ."<br>";
echo "Comments:" . $myComments ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";

$query = "INSERT INTO {$myTable} (title, source, subject, author, summary, comments, datum, bibliography)
VALUES ('$myTitle', '$mySource', '$mySubject', '$myAuthor', '$mySummary', '$myComments', CURDATE(), '$myBibliography')";

$result = mysqli_query($connection, $query) or die('Connection Error');
mysqli_close($connection);


?>
<br>
<br>
<br>
<a href= "http://marei.info/news.html"> Click Here to Return to Home  </a>

</body>


</html>
