

<head>
<title>Kassa</title>
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="News";

$connection = mysqli_connect($servername, $username, $password, $database);

#http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/

/*function removeUmlout($str) {
  $a = array('Ä', 'ä', 'Ü', 'ü', 'Ö', 'ö');
  $b = array('ae', 'Ae','Ue','ue', 'Oe', 'oe');
  return str_replace($a, $b, $str);
}
*/


echo "--------------------" ."<br>";
$myTable=$_POST['tableName'];
$myHundruds=($_POST['hundruds'] * 100);
$myFifties=($_POST['fifties'] * 50);
$myTweenties=($_POST['tweenties'] * 20);
$myTens=($_POST['tens'] * 10);
$myFives=($_POST['fives'] * 5);
$myTwos=($_POST['twos'] * 2);
$myOnes=($_POST['ones'] * 1);
$myFiftyCents=($_POST['fiftycents'] * 0.5);
$myTweentyCents=($_POST['tweenycents'] * 0.2);
$myTenCents=($_POST['tencents'] * 0.10);
$myFiveCents=($_POST['fivecents'] * 0.05);


$sumKassaOne = ($myHundruds + $myFifties + $myTweenties + $myTens + $myFives + $myTwos + $myOnes + $myFiftyCents
+ $myTweentyCents + $myTenCents + $myFiveCents);

echo "Sum of Kassa 01 is: " . $sumKassaOne . "<br>";





$myHundruds=($_POST['shundruds'] * 100);
$myFifties=($_POST['sfifties'] * 50);
$myTweenties=($_POST['stweenties'] * 20);
$myTens=($_POST['stens'] * 10);
$myFives=($_POST['sfives'] * 5);
$myTwos=($_POST['stwos'] * 2);
$myOnes=($_POST['sones'] * 1);
$myFiftyCents=($_POST['sfiftycents'] * 0.5);
$myTweentyCents=($_POST['stweenycents'] * 0.2);
$myTenCents=($_POST['stencents'] * 0.10);
$myFiveCents=($_POST['sfivecents'] * 0.05);

$sumKassaTwo = ($myHundruds + $myFifties + $myTweenties + $myTens + $myFives + $myTwos + $myOnes + $myFiftyCents
+ $myTweentyCents + $myTenCents + $myFiveCents);


echo "Sum of Kassa 02 is: " . $sumKassaTwo . "<br>";

$sumOfKassa = $sumKassaOne + $sumKassaTwo;

echo "Total Sum of Kassa is: " . $sumOfKassa . "<br>";

/*
echo "Table Name:" . $myTable ."<br>";
echo "Title:" . $myTitle ."<br>";
echo "Source:" . $mySource ."<br>";
echo "Subject:" . $mySubject ."<br>";
echo "Author:" . $myAuthor ."<br>";
echo "Summary:" . $mySummary ."<br>";
echo "Comments:" . $myComments ."<br>";
#echo "Date:" . $myDate ."<br>";
echo "Bibliography:" . $myBibliography ."<br>";
*/

/*
$query = "INSERT INTO {$myTable} (title, source, subject, author, summary, comments, datum, bibliography)
VALUES ('$myTitle', '$mySource', '$mySubject', '$myAuthor', '$mySummary', '$myComments', CURDATE(), '$myBibliography')";

#$result = mysqli_query($connection, $query) or die('Connection Error');
$result = mysqli_query($connection, $query) or die('Connection Error');
#$query = "INSERT INTO plants (plantsName, comments) VALUES ('$plant', '$mycomment')";
#$query = mysqli_query("INSERT INTO '$mytable' (plantsName, comments) VALUES ('$plant', '$mycomment')") or die('No Connection');
#mysqli_query($connection, $query) or die('Connection Error');

mysqli_close($connection);

header('Refresh: 60; URL=http://localhost/news.html');

//Select Statament
//https://www.w3schools.com/php/php_mysql_select.asp
// Create connection

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

#$sql = "SELECT idpolitics, title, source FROM Politics";
$sql = "SELECT idpolitics, title, source FROM Politics";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        //echo "<br>". "id: " . $row["idpolitics"]."<br>". "Title: " . $row["title"]. "<br>"."URL: " . $row["source"]. "<br>";
       echo  "<br>". "<br>" . "id: " . $row["idpolitics"]."<br>". "Title: " . $row["title"]. "<br>" . "<br>";
         //echo '<a href="'.$row["source"].'"> '.$row["source"].' </a>';
         echo '<a href=""> '.$row["source"].' </a>';
         //echo '<a href="'.$row["source"].'"> </a>';
    }
} else {
    echo "0 results";
}

$conn->close();

*/
?>
<br>
<br>
<br>
<a href= "http://localhost/kassa.02.html"> Click Here to Return to Home  </a>

</body>


</html>
