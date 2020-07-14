

<head>
<title>Kassa</title>
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);
/*$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="News";
$connection = mysqli_connect($servername, $username, $password, $database);
*/
$STARTMONEYINKASSA= 440;

function floor05($input) {
  //round down to the lowest 5
    $input = $input/5;
    $input = floor($input);
    $input = 5*$input;
    return $input;
  }

echo "--------------------" ."<br>";

$myTwos=($_POST['twos'] * 2);
$myOnes=($_POST['ones'] * 1);
$myFiftyCents=($_POST['fiftycents'] * 0.5);
$myTweentyCents=($_POST['tweenycents'] * 0.2);
$myTenCents=($_POST['tencents'] * 0.10);
$myFiveCents=($_POST['fivecents'] * 0.05);

$sumKassaOneMunze = ($myTwos + $myOnes + $myFiftyCents + $myTweentyCents + $myTenCents + $myFiveCents);

echo "Sum of Kassa 01 is: " . $sumKassaOneMunze . "<br>";

$myTwos=($_POST['stwos'] * 2);
$myOnes=($_POST['sones'] * 1);
$myFiftyCents=($_POST['sfiftycents'] * 0.5);
$myTweentyCents=($_POST['stweenycents'] * 0.2);
$myTenCents=($_POST['stencents'] * 0.10);
$myFiveCents=($_POST['sfivecents'] * 0.05);

$sumKassaTwoMunze = ($myTwos + $myOnes + $myFiftyCents + $myTweentyCents + $myTenCents + $myFiveCents);

echo "Sum of Kassa 02 is: " . $sumKassaTwoMunze . "<br>";

$sumOfKassaMunze = $sumKassaOneMunze + $sumKassaTwoMunze;

echo "Sum of both Kassa: " . $sumOfKassaMunze . "<br>";

$roundLowerFive=floor05($sumOfKassaMunze);

//echo "Kassa rounded to the lowest 5 euro: " . floor05($sumOfKassaMunze) . "<br>";
echo "Kassa rounded to the lowest 5 euro: " . $roundLowerFive . "<br>";

$wechselGeld=$STARTMONEYINKASSA - $roundLowerFive;

echo "Wechsel Geld in Plastik Sackel is: ". $wechselGeld . "<br>";

$rest = $sumOfKassaMunze - $roundLowerFive;

echo "Rest is: " . $rest . "<br>";

/*
$toNearestFive=floor($sumOfKassaMunze);



echo "Kassa rounded to the lowest 5 euro: " . $toNearestFive . "<br>";

*/
?>
<br>
<br>
<br>

<a href= "http://localhost/cash.html"> Click Here to Return to Home  </a>

</body>


</html>
